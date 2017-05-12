<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $filltable = [
        'id',
        'order_id',
        'product_id',
        'quantity',
        'price',
        'status',
    ];

    public $timestamp = false;

    public function order()
    {
        return $this->belongTo(Order::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
