<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class safeTruck extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'price',
        'image_one',
        'image_two',

    ];
}
