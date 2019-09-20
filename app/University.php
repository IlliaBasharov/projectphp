<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $table = 'universities';
    protected $fillable = [
        'name',
        'old_name',
        'specialization',
        'rating',
        'avatar',
    ];

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function faculty()
    {
        return $this->hasMany('App\Faculty');
    }
}
