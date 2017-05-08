<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deliver extends Model
{
    protected $table = 'delivers';

    protected $filltable = [
        'id',
        'deliver_name',
        'price',
    ];

    public $timestamp = false;

    public function order()
    {
        return $this->hasMany(Order::class);
    }
}
