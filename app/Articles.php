<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    'title',
    'tag',
    'content',
    'foto'
    ];

    public function setLiveAttribute($value)
    {
        $this->attributes['live'] = (boolean)($value);
    }
}
