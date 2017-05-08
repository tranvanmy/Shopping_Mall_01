<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table ='wishlists';

    protected $filltable =
    [
        'id',
        'User_id',
        'Product_id',
    ]

    public $timestamp = true;

    public function product()
    {
        return $this->hasMany('App\Product');
    }

    public function user()
    {
        return $this->belongTo('App\User');
    }
}
