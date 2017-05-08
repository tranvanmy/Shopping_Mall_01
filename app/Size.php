<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $table ='sizes';

    protected $filltable =
    [
        'id',
        'Size_name',
    ]

    public $timestamp = false;

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
