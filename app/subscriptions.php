<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subscriptions extends Model
{
    protected $table ='subscriptions';

    protected $filltable =
    [
        'id',
        'User_id',
        'Name',
        'Stripe_id',
        'Stripe_plan',
        'Quantity',
    ]

    public $timestamp = false;

    public function order()
    {
        return $this->hasMany('App\Order');
    }

    public function user()
    {
        return $this->belongTo('App\User');
    }
}
