<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = [
        'login',
        'password',
        'email',
    ];


    protected $attributes = [
        'role' => 1,
        'is_publish' => 1
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}

