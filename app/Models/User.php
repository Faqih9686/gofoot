<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Order;
use App\Models\Cart;

/**
 * @property \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @method \Illuminate\Database\Eloquent\Relations\HasMany orders()
 *  @property \Illuminate\Database\Eloquent\Collection|\App\Models\Cart[] $carts
 * @method \Illuminate\Database\Eloquent\Relations\HasMany carts()
 */
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function carts()
    {
        return $this->hasMany(Cart::class);
    }

    public function services() 
    {
        return $this->hasMany(Service::class);
    }

    public function membersip()
    {
        return $this->hasOne(Membership::class);
    }
}
