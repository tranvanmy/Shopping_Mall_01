<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table ='products';

    protected $filltable =
     [
        'id',
        'Product_name',
        'Product_image',
        'Cate_id',
        'Factory_id',
        'Price',
        'SaleOff',
        'Start_sale',
        'End_sale',
        'Size_id',
        'Color_id',
        'Description',
        'Content',
        'Point',
     ]

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
