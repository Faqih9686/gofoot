<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        return Service::with('category')->get();
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
}
