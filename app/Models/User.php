<?php

namespace App\Models;

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
        'full_name',
        'auth_key',
        'email',
        'phone',
        'address',
        'level',
        'status',
        'striper_id',
        'card_brand',
        'card_last_four',
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
        return $this->hasMany(Like::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function subscription()
    {
        return $this->hasMany(Subscription::class);
    }

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class);
    }
}
