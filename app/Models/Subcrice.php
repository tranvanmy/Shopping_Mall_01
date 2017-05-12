<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcrice extends Model
{
    protected $filltable = [
        'id',
        'gmail',
        'status',
    ];

    public $timestamp = false;
}
