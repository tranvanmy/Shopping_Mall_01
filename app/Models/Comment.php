<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $filltable = [
        'id',
        'user_id',
        'product_id',
        'content',
        'time',
        'parent_id',
        'like_id',
        'status',
    ];

    public $timestamp = false;

    public function product()
    {
        return $this->belongTo(Product::class);
    }
}
