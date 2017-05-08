<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table ='order_details';

    protected $filltable =
    [
        'id',
        'Order_id',
        'Product_id',
        'Quantity',
        'Price',
        'Status',
    ]

    public $timestamp = false;

    public function order()
    {
        return $this->belongTo('App\Order');
    }

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
