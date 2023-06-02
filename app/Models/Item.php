<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Item extends Model
{
    use HasFactory;

    public function isAvailable()
    {
        return $this->unavailable_until === null || $this->unavailable_until->isPast();
    }

    public function unavailableUntil()
    {
        return Carbon::parse($this->unavailable_until);
    }
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'lender_id');
    }
    
}
