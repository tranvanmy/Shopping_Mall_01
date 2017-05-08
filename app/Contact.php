<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table ='contacts';

    protected $filltable =
    [
        'id',
        'Name',
        'Email',
        'Subject',
        'Company',
        'Message',
        'Status',
    ]

    public $timestamp = false;
}
