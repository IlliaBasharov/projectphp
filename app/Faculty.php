<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';
    protected $fillable = [
        'name',
    ];

    public function university()
    {
        return $this->belongsTo('App\University');
    }
}
