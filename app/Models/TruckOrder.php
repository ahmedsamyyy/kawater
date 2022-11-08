<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckOrder extends Model
{
    use HasFactory;
    protected $fillable=[
        'adress_name',
        'street_name',
        'description',
        'governorate_id',
        'city_id',
        'country_id',
        'let',
        'lang',
        'date',
        'time',
        'to_let',
        'to_lang',
        'to_adress_name',
        'to_street_name',
        'to_description',
        'to_country_id',
        'to_governorate_id',
        'to_city_id',
        'name',
        'phone',
        'shipment_id',
        'safetruck_id',
        'image_one',


    ];

}
