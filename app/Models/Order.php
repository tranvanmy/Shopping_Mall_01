<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

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
        return $this->hasMany(Order_detail::class);
    }

    public function payment()
    {
        return $this->belongTo(Payment::class);
    }

    public function subcription()
    {
        return $this->hasMany(Subcription::class);
    }

    public function deliver()
    {
        return $this->belongTo(Deliver::class);
    }

    public function user()
    {
        return $this->belongTo(User::class);
    }
}
