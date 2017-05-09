<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $table ='subscriptions';

    protected $filltable = [
        'id',
        'user_id',
        'name',
        'stripe_id',
        'stripe_plan',
        'quantity',
    ];

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
