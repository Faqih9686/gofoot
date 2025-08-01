<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'service_id',
        'quantity',
        'total_price',
        'payment_method',
        'status',
        
    ];
 
    public function user()
    {
        return $this->belongsTo(User::class);
    }
// untuk item
    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function service() {
        return $this->belongsTo(Service::class);
    }
    
}
