<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'country_id',
        'governorate_id',
        'city_id',
        'description',
        'street_name',

    ];
}
