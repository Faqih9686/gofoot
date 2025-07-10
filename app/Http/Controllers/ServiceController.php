<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;


/**
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @method \Illuminate\Database\Eloquent\Relations\HasMany services()
 */
class ServiceController extends Controller
{
    public function index()
    {
        return Service::where('user_id', auth()->id())->get();
    }

    public function show($id)
    {
        return Service::with('category', 'reviews')->findOrFail($id);
    }

    public function search(Request $request)
    {
        $query = Service::query();

        // Filter berdasarkan lokasi
        if ($request->has('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        // Filter berdasarkan kategori
        if ($request->has('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        // Filter berdasarkan minimal rating produk
        if ($request->has('rating')) {
            $query->where('rating', '>=', $request->rating); // Jika rating ada di tabel Service
        }

        // Sorting
        if ($request->has('sort')) {
            $sort = $request->sort;

            if ($sort === 'best_selling') {
                $query->withCount('orderItems')
                    ->orderByDesc('order_items_count');
            } elseif ($sort === 'top_rated') {
                $query->withAvg('reviews', 'rating')
                    ->orderByDesc('reviews_avg_rating');
            } elseif ($sort === 'price_asc') {
                $query->orderBy('price', 'asc');
            } elseif ($sort === 'price_desc') {
                $query->orderBy('price', 'desc');
            }
        }

        return response()->json($query->get());
    }

    public function store(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        $membership = $user->membership;

        // Hitung jumlah layanan yang sudah dibuat user ini
        $currentServiceCount = $user->services()->count();

        // Tentukan batas upload berdasarkan membership
        $membership = $user->membership;

        $package = $membership->package ?? 'silver';

        $limit = match ($package) {
            'diamond' => 25,
            'gold'    => 10,
            'silver'  => 3,
            default   => 3,
        };

        // Cek apakah melebihi batas
        if ($currentServiceCount >= $limit) {
            return response()->json([
                'message' => 'Anda telah mencapai batas maksimal layanan untuk paket ' . strtoupper($membership->package ?? 'SILVER')
            ], 403);
        }

        if ($membership && $membership->expires_at && $membership->expires_at->isPast()) {
            return response()->json([
                'message' => 'Membership Anda telah kadaluarsa. Silakan perpanjang.'
            ], 403);
        }
        
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'category_id' => 'required',
            'location' => 'required',
        ]);

        return Service::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'location' => $request->location,
            'image' => $request->image ?? null,
        ]);
    }

    public function update(Request $request, $id)
    {
        $service = Service::where('user_id', auth()->id())->findOrFail($id);
        $service->update($request->only('name', 'price', 'category_id', 'location'));
        return response()->json(['message' => 'Updated']);
    }

    public function destroy($id)
    {
        $service = Service::where('user_id', auth()->id())->findOrFail($id);
        $service->delete();
        return response()->json(['message' => 'Deleted']);
    }
}
