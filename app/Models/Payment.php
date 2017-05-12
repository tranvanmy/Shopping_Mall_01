<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $filltable = [
        'id',
        'payment_name',
        'status',
    ];

    public $timestamp = false;
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
