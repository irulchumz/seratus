<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotations extends Model
{
    protected $table = 'quotations';

    protected $fillable = [
    'title',
    'id_product',
    'id_user',
    'quantity',
    'content'
    ];
}
