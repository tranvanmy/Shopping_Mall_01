<?php

namespace App\Models;

use App\ProductImages;
use App\Models\Colors;
use App\Models\Size;
use App\Models\Factory;
use App\Models\Categories;
use Laravel\Scout\Searchable;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Searchable;

    protected $data = [
        'create_at',
        'update_at',
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

    public function searchableAs()
    {
        return 'product';
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        return $array;
    }

    public $timestamp = true;

    public function scopeProduct($query)
    {
        $product = $query->select('id', 'product_name', 'product_image', 'price', 'saleoff')
                         ->orderBy('id', 'DESC')->skip(0)->take(8)->paginate(8);

        return  $product;
    }

    public function scopelistProduct($query)
    {
        $listProduct = $query->join('categories', 'cate_id', '=', 'categories.id')
                            ->join('factories', 'factory_id', '=', 'factories.id')
                            ->select('products.*', 'factories.factory_name', 'categories.cate_name')->get();

        return $listProduct;
    }

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

    public function comments()
    {
        return $this->hasMany(Comment::class)->where('parent_id', null)->orderBy('id', 'DESC');
    }

    public function orderDetails()
    {
        return $this->hasMany(Order_detail::class);
    }

    public function wishLists()
    {
        return $this->hasMany(Wishlist::class);
    }
}
