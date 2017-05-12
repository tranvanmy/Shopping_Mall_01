<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deliver extends Model
{
    protected $filltable = [
        'id',
        'deliver_name',
        'price',
    ];

    public $timestamp = false;

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
