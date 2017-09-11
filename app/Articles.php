<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
     protected $fillable = [
    'title',
    'tag',
    'content',
    'rubric',
    'magazine',
    'foto'
    ];

    public function setLiveAttribute($value)
    {
        $this->attributes['live'] = (boolean)($value);
    }
}
