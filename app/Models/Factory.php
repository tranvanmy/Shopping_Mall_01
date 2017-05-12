<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    protected $filltable = [
        'id',
        'factory_name',
        'factory_logo',
        'factory_website',
    ];

    public $timestamp = false;

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
