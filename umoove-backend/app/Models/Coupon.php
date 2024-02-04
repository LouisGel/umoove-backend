<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_used',
        'coupon_type_id',
        'user_id',
        'code',
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
