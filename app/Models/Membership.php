<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'package',
        'expired_at',
    ];

    protected $casts = [
        'expires_at' => 'datetime',
        'benefits' => 'array',
    ];

    protected $dates = ['expired_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function isActve()
    {
        return $this->expired_at && $this->expired_at->isFuture();
    }

    public function dayRemaining()
    {
        return $this->expired_at ? Carbon::now()->diffInDays($this->expired_at, false) : 0;
    }
}
