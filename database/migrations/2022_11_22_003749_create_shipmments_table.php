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
        Schema::create('shipmments', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->integer('kg');
            $table->string('desc')->nullable();
            $table->foreignId('truck_type_id')->nullable()->constrained('truck_types');
            $table->foreignId('tall_truck_id')->nullable()->constrained('tall_trucks');
            $table->foreignId('ard_truck_id')->nullable()->constrained('ard_trucks');
            $table->foreignId('height_truck_id')->nullable()->constrained('height_trucks');
            $table->foreignId('loadspacitie_id')->nullable()->constrained('loadspacities');
            $table->foreignId('number_mhawer_id')->nullable()->constrained('number_mhawers');
            $table->foreignId('number_truck_id')->nullable()->constrained('number_trucks');


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
        Schema::dropIfExists('shipmments');
    }
};
