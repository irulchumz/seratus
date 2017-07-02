<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showrooms extends Model
{
     protected $table = 'showrooms';

    protected $fillable = [
    'name',
    'location'
    ];
}
