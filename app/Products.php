<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
    'name',
    'id_brand',
    'photo_1',
    'photo_2',
    'photo_3',
    'file_a',
    'file_b',
    'file_c'
    ];
}
