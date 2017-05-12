<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $filltable =
    [
        'id',
        'user_id',
        'product_id',
    ];

    public $timestamp = true;

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function user()
    {
        return $this->belongTo(User::class);
    }
}
