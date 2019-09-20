<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function faculty()
    {
        return $this->hasMany('App\Faculty');
    }
}
