<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcrice extends Model
{
    
    protected $table ='subcrices';

    protected $filltable =
    [
        'id',
        'Gmail',
        'Status',
    ]

    public $timestamp = false;
}
