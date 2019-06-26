<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
 
  /* public function posts()
{
    return $this->hasMany('App\Post');
}
    public function comment()
{
    return $this->hasMany('App\Comment');
}*/
}
