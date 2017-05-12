<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    protected $filltable = [
        'id',
        'color_name',
        'status',
    ];
    public $timestamps = true;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
