<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    protected $table = 'rates';

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

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
