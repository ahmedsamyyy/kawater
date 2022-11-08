<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipmment extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'kg',
        'desc',
        'truck_type_id',
        'tall_truck_id',
        'ard_truck_id',
        'height_truck_id',
        'loadspacitie_id',
        'number_mhawer_id',
        'number_truck_id',

    ];
}
