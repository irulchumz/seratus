<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    protected $table = 'articles';

    protected $fillable = [
    'name',
    'title',
    'content',
    'photo_1',
    'photo_2',
    'photo_3',
    'photo_4'
    ];
}
