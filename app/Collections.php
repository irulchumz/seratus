<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Collections extends Model
{
    protected $table = 'collections';

    protected $fillable = [
    'id_product',
    'id_user'
    ];
