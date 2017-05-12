<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $filltable = [
        'id',
        'product_id',
        'point',
        'user_id',
    ];

    public $timestamp = false;

    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
