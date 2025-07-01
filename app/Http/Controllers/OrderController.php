<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        assert($user instanceof \App\Models\User);

        return $user->orders()->with('items.service')->get();
    }

    public function store(Request $request)
    {
        $user = auth()->user();

        // Ambil isi keranjang user 
        $cartItems = Cart::where('user_id', $user->id)->with('service')->get();

        if ($cartItems->isEmpty()) {
            return response()->json(['message' => 'Keranjang kosong'], 400);
        }

        // Hitung Total Harga
        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item->service->price * $item->quantity;
        }

        DB::beginTransaction();

        try {
            // Buat order
            $order = Order::create([
                'user_id' => $user->id,
                'total_price' => $total,
                'payment_method' => $request->payment_method ?? 'cash',
                'status' => 'pending',
                'qris_url' => $request->payment_method === 'qris' ? '/images/qris.png' : null,
            ]);

            // Simpan order_items
            foreach ($cartItems as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'service_id' => $item->service_id,
                    'quantity' => $item->quantity,
                    'price' => $item->service->price,
                ]);
            }

            // Kosongkan keranjang
            Cart::where('user_id', $user->id)->delete();

            DB::commit();
            return response()->json(['message' => 'Checkout berhasil', 'order_id' => $order->id], 201);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['message' => 'Checkout gagal', 'error' => $e->getMessage()], 500);
        }
    }

    public function show($id)
    {
        $order = Order::with('items.service')->findOrFail($id);

        $this->authorize('view', $order); // ✅ Check pemilik

        return $order;
    }

    public function uploadProof(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $this->authorize('update', $order);

        $request->validate([
            'payment_proof' => 'required|image|max:2048',
        ]);
    
        $path = $request->file('payment_proof')->store('payment_proofs', 'public');
    
        $order->payment_proof = $path;
        $order->save();
    
        return response()->json(['message' => 'Bukti bayar berhasil diupload.']);
    }
}
