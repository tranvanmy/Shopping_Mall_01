<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    
    protected $table ='banners';

    protected $filltable =
    [
        'id',
        'title_1',
        'title_2',
        'title_3',
        'image',
        'Position',
        'Status',
    ]

    public $timestamp = false;

    public function cate()
    {
        return $this->belongTo('App\Category');
    }
}
