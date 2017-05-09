<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='orders';

    protected $filltable = [
       'id',
       'user_id',
       'username',
       'email',
       'mobile',
       'address_ship',
       'request',
       'total',
       'payment_id',
       'deliver_id',
       'id_sub',
       'status',
    ];

    public $timestamp = true;

    public function orderdetail()
    {
        return $this->hasMany('App\Order_detail');
    }

    public function payment()
    {
        return $this->belongTo('App\Payment');
    }

    public function subcription()
    {
        return $this->hasMany('App\subcription');
    }

    public function deliver()
    {
        return $this->belongTo('App\Deliver');
    }

    public function user()
    {
        return $this->belongTo('App\User');
    }

}
