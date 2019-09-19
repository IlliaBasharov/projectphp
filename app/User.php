<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'login',
        'password',
        'mail',
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
