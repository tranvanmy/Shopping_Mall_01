<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $filltable = [
        'id',
        'cate_name',
        'parent_id',
        'status',
    ];

    public $timestamps = true;

    public function banner()
    {
        return $this -> hasMany(Banner::class);
    }
}
