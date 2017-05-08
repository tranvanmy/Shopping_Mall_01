<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    protected $data = [
        'create_at',
        'update_at'
    ];

    protected $filltable = [
        'id',
        'product_name',
        'product_image',
        'cate_id',
        'factory_id',
        'price',
        'saleoff',
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
        return $this->belongTo(Category::class);
    }

    public function color()
    {
        return $this->belongTo(Color::class);
    }

    public function size()
    {
        return $this->belongTo(Size::class);
    }

    public function factory()
    {
        return $this->belongTo(Factory::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function rank()
    {
        return $this->hasMany(Rank::class);
    }

    public function orderdetail()
    {
        return $this->hasMany(Order_detail::class);
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }
}
