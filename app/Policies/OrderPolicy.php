<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OrderPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function view(User $user, Order $order)
    {
        return $user->id === $order->user_id;
    }

    public function update(User $user, Order $order)
    {
        return $user->id === $order->user_id;
    }

    public function delete(User $user, Order $order)
    {
        return $user->id === $order->user_id;
    }
}
