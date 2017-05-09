<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $filltable = [
        'id',
        'cate_name',
        'parent_id',
        'created_at',
        'updated_at',
        'status',
    ];

    public $timestamps=true;

    public function banner()
    {
        return $this->hasMany('App\Banner');
    }
}
