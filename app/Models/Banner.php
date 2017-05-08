<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $table = 'banners';

    protected $filltable = [
        'id',
        'title_1',
        'title_2',
        'title_3',
        'image',
        'position',
        'status',
    ];

    public $timestamp = false;

    public function cate()
    {
        return $this->belongTo(Category::class);
    }
}
