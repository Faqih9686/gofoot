<?php

namespace App\Http\Controllers\Mitra;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Review;

/**
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @method \Illuminate\Database\Eloquent\Relations\HasMany services()
 */
class MitraController extends Controller
{
    public function dashboard() {
        /** @var \App\Models\User $user */
        $user = auth()->user();
        $services = $user->services()->with('orders')->get();
    
        return response()->json([
            'total_services' => $services->count(),
            'total_orders'   => $services->sum(fn($s) => $s->orders->count()),
            'average_rating' => Review::whereIn('order_id', $user->services->flatMap->orders->pluck('id'))->avg('rating'),
        ]);
    }
    
    public function orders() {
        return Order::whereHas('service', fn($q) => $q->where('user_id', auth()->id()))->with('user', 'service')->get();
    }
    
    public function updateOrderStatus($id, Request $request) {
        $order = Order::where('id', $id)
                      ->whereHas('service', fn($q) => $q->where('user_id', auth()->id()))
                      ->firstOrFail();
    
        $order->status = $request->status;
        $order->save();
    
        return response()->json(['message' => 'Status updated']);
    }
    
    public function transactions() {
        return Order::whereHas('service', fn($q) => $q->where('user_id', auth()->id()))
                    ->where('status', 'paid')->get();
    }
}
