<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'desription',
        'location',
        'price',
        'rating',
        'image',
        'category_id',
        'mitra_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function mitra()
    {
        return $this->belongsTo(User::class, 'mitra_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
