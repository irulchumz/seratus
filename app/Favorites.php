<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    protected $table = 'favorites';

    protected $fillable = [
    'id_product',
    'id_user'
    ];
}
