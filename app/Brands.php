<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = 'brands';

    protected $fillable = [
    'name',
    'address',
    'contact',
    'description',
    'toko',
    'brand',
    'online',
    'offline',
    'local',
    'international',
    'city',
    'operation_hour',
    'telphone_number',
    'email_sales',
    'email_media',
    'website',
    'tags',
    'photo_showroom',
    'photo_product_still_life',
    'photo_product_white_background',
    '3d_model',
    'featured_100plus',
    'link_photo_folder',
    'category',
    'foto'
    ];
}
