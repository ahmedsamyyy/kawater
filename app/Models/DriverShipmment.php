<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DriverShipmment extends Model
{
    use HasFactory;
    protected $fillable=['driver_type_truck_id', 'driver_login_id','driver_category_truck_id','number_truck','color'];

    public function driverlogin()
    {
        return $this->hasOne(DriverLogin::class);
    }
}

