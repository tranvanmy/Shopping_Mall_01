<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $table ='likes';

    protected $filltable =
    [
        'id',
        'User_id',
        'like_id',
        'like_type',
        'Status',
    ]

    public $timestamp = false;

    public function user()
    {
        return $this->belongTo('App\User');
    }

    public function comment()
    {
        return $this->belongTo('App\Comment');
    }
}
