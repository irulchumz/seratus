<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    protected $table = 'brands';

    protected $fillable = [
    'name',
    'address',
    'category',
    'contact',
    'description',
    'operation_hour',
    'comment',
    'toko',
    'brand',
    'online',
    'offline',
    'local',
    'international',
    'city',
    'telphone_number',
    'email_sales',
    'email_media',
    'website',
    'tags',
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
