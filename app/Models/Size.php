<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table = 'sizes';

    protected $filltable = [
        'id',
        'size_name',
    ];

    public $timestamp = false;

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
