<?php

namespace Database\Seeders;

use App\Models\TruckOrder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TruckOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trickorder=TruckOrder::create([
        'adress_name'=>'ahmedomar',
        'street_name'=>'klgjfklg',
        'description'=>'no',
        'governorate_id'=>1,
        'city_id'=>1,
        'country_id'=>1,
        'let'=>3,
        'lang'=>5,
        'to_let'=>11,
        'to_lang'=>9,
        'to_adress_name'=>'elmahala',
        'to_street_name'=>'gazl',
        'to_description'=>'korany',
        'to_country_id'=>1,
        'to_governorate_id'=>1,
        'to_city_id'=>1,
        'name'=>'haran',
        'phone'=>'010235648',

        ]);



    }
}
