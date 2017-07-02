<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $table = 'ads';

    protected $fillable = [
    'name',
    'pages',
    'description',
    'photo'
    ];
}
