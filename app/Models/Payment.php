<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';

    protected $filltable = [
        'id',
        'payment_name',
        'status',
    ];

    public $timestamp = false;
    
    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
