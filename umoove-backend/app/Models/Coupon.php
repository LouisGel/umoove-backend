<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'reward_per_km',
        'max_speed',
    ];

    public function couponType()
    {
        return $this->belongsTo(CouponType::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
