<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magazines extends Model
{
    protected $table = 'magazines';

    protected $fillable = [
    'name',
    'title',
    ];
}
