<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpdateImage extends Model
{
    use HasFactory;
    protected $fillable=[
        'image_first',
        'image_second',
        'image_mine_one',

        'image_mine_two',

        'let',

        'lang',


    ];
}
