<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table ='comments';

    protected $filltable =
    [
        'id',
        'User_id',
        'Product_id',
        'Content',
        'Time',
        'Parent_id',
        'Like_id',
        'Status',
    ]

    public $timestamp = false;

    public function product()
    {
        return $this->belongTo('App\Product');
    }
}
