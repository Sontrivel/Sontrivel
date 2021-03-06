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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function nicknames() {
        return $this->hasMany('App\Nicknames');
    }
    public function friendlist() {
        return $this->hasMany('App\Friendlist');
    }
    public function user() {
        return $this->hasMany('App\PlayerGamePos');
    }
}
