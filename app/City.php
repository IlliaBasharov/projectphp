<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = [
        'name',
        'old_name',
    ];

    public function university()
    {
        return $this->hasMany('App\University');
    }
}
