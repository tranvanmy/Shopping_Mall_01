<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';

    protected $filltable = [
        'id',
        'product_name',
        'product_image',
        'cate_id',
        'factory_id',
        'price',
        'saleOff',
        'start_sale',
        'end_sale',
        'size_id',
        'color_id',
        'description',
        'content',
        'point',
        'point_count',
     ];

    public $timestamp = true;

    public function cate()
    {
        return $this->belongTo('App\Category');
    }

    public function color()
    {
        return $this->belongTo('App\Color');
    }

    public function size()
    {
        return $this->belongTo('App\Size');
    }

    public function factory()
    {
        return $this->belongTo('App\Factory');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    public function rank()
    {
        return $this->hasMany('App\Rank');
    }

    public function orderdetail()
    {
        return $this->hasMany('App\Order_detail');
    }

    public function wishlist()
    {
        return $this->hasMany('App\Wishlist');
    }
}
