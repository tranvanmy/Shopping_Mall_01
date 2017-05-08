<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    protected $table ='ranks';

    protected $filltable =
    [
        'id',
        'Product_id',
        'Point',
        'User_id',
    ]

    public $timestamp = false;

    public function user()
    {
        return $this->belongTo('App\User');
    }

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
