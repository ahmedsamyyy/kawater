<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver_shipmments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_type_truck_id')->nullable()->constrained('driver_type_trucks');
            $table->foreignId('driver_number_truck_id')->nullable()->constrained('driver_number_trucks');
            $table->foreignId('driver_category_truck_id')->nullable()->constrained('driver_category_trucks');
            $table->integer('number_truck')->nullable();
            $table->string('color')->nullable();
            $table->foreignId('model_truck_id')->nullable()->constrained('model_trucks');
            $table->foreignId('driver_tall_truck_id')->nullable()->constrained('driver_tall_trucks');
            $table->foreignId('driverard_truck_id')->nullable()->constrained('driverard_trucks');
            $table->foreignId('driverheight_truck_id')->nullable()->constrained('driverheight_trucks');
            $table->foreignId('driver_load_spacitie_id')->nullable()->constrained('driver_load_spacities');
            $table->foreignId('drivermhawer_id')->nullable()->constrained('drivermhawers');
            $table->integer('driver_login_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver_shipmments');
    }
};
