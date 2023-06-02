<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Product extends Model
{

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    public function borrowers()
    {
        return $this->belongsToMany(User::class, 'product_borrowers')->withTimestamps();
    }
    
    
}
