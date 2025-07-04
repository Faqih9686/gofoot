<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        /** @var User $user */
    $user = auth()->user();

    $carts = $user->carts;

    return $carts;
    }

    public function store(Request $request)
    {
        return Cart::updateOrCreate([
            'user_id' => auth()->id(),
            'service_id' => $request->service_id
        ], [
            'quantity' => $request->quantity
        ]);
    }

    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        if ($cart->user_id == auth()->id()) {
            $cart->delete();
        }
    }
}
