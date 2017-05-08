<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliver extends Model
{
    protected $table ='delivers';

    protected $filltable =
    [
        'id',
        'Deliver_name',
        'Price',
    ]

    public $timestamp = false;

    public function order()
    {
        return $this->hasMany('App\Order');
    }
}
