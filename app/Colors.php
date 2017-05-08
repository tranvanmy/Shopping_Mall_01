<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Colors extends Model
{
    protected $table ='colors';

    protected $filltable =
    [
        'id',
        'Color_name',
        'created_at',
        'updated_at',
        'Status',
    ];

    public $timestamps=true;

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
