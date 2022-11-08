<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identitycard extends Model
{
    use HasFactory;
    protected $fillable=[
        'active_card','image_card','image_card_two','name','type',

    ];
}
