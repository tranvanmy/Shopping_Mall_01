<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'Full_name',
        'Auth_key',
        'email',
        'Phone',
        'Address',
        'Level',
        'Status',
        'Striper_id',
        'Card_brand',
        'Card_last_four',
        'facebook_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function like()
    {
        return $this->hasMany('App\Like');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    public function subscription()
    {
        return $this->hasMany('App\subscription');
    }

    public function wishlist()
    {
        return $this->hasMany('App\Wishlist');
    }
}
