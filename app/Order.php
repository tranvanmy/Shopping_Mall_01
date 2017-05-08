<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='orders';

    protected $filltable =
    [
       'id',
       'User_id',
       'Username',
       'Email',
       'Mobile',
       'Address_ship',
       'Request',
       'Total',
       'Payment_id',
       'Deliver_id',
       'Id_sub',
       'Status',
    ]

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
