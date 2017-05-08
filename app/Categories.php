<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table ='categories';

    protected $filltable =
    [
        'id',
        'Cate_name',
        'Parent_id',
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
