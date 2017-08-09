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

     public function setTokoAttribute($value)
    {
        $this->attributes['toko'] = (boolean)($value);
    }
    public function setBrandAttribute($value)
    {
        $this->attributes['brand'] = (boolean)($value);
    }
    public function setOnlineAttribute($value)
    {
        $this->attributes['online'] = (boolean)($value);
    }
    public function setOfflineAttribute($value)
    {
        $this->attributes['offline'] = (boolean)($value);
    }
    public function setLocalAttribute($value)
    {
        $this->attributes['local'] = (boolean)($value);
    }
    public function setInternationalAttribute($value)
    {
        $this->attributes['international'] = (boolean)($value);
    }
}
