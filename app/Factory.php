<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factory extends Model
{
   protected $table ='factories';

    protected $filltable =
    [
        'id',
        'Factory_name',
        'Factory_logo',
        'Factory_website',
    ]

    public $timestamp = false;

    public function product()
    {
        return $this->hasMany('App\Product');
    }
}
