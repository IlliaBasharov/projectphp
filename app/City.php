<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function university()
    {
        return $this->hasMany('App\University');
    }
}
