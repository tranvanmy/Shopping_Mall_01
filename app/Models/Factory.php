<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
    protected $table = 'factories';

    protected $filltable = [
        'id',
        'factory_name',
        'factory_logo',
        'factory_website',
    ];

    public $timestamp = false;

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
