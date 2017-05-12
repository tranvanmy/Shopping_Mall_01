<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $filltable = [
        'id',
        'size_name',
    ];

    public $timestamp = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
