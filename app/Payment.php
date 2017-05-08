<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table ='payments';

    protected $filltable =
    [
        'id',
        'Payment_name',
        'Status',
    ]

    public $timestamp = false;
    
    public function order()
    {
        return $this->hasMany('App\Order');
    }
}
