<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
    'name',
    'brands',
    'comment',
    'description',
    'tags',
    'category',
    'photo_1',
    'photo_2',
    'photo_3',
    'file_1',
    'file_2',
    'file_3',
    'file_4'
    ];
}
