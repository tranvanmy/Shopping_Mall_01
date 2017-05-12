<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $filltable = [
        'id',
        'user_id',
        'like_id',
    ];

    public $timestamp = false;

    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function comment()
    {
        return $this->belongTo(Comment::class);
    }
}
