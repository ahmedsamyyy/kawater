<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelTruck extends Model
{
    use HasFactory;
    protected $fillable=['name'];
}
