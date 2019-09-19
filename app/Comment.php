<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'text',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function teacher()
    {
        return $this->belongsTo('App\Teacher');
    }
}
