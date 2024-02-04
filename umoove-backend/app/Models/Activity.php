<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'reward_per_km',
        'max_speed',
    ];

    public function histories()
    {
        return $this->hasMany(History::class);
    }

    public function movementTemps()
    {
        return $this->hasMany(MovementTemp::class);
    }
}
