<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'birthday',
        'photo',
        'position',
    ];

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    public function department()
    {
        return $this->belongsTo('App\Department');
    }

}
