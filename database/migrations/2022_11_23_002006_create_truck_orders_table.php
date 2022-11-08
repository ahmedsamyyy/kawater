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
        Schema::create('truck_orders', function (Blueprint $table) {
            $table->id();
            $table->string('adress_name');
            $table->string('street_name');
            $table->string('description');
            $table->foreignId('governorate_id')->nullable()->constrained('governorates');
            $table->foreignId('city_id')->nullable()->constrained('cities');
            $table->foreignId('country_id')->nullable()->constrained('countries');
            $table->decimal('let',8,2)->nullable();
            $table->decimal('lang',8,2)->nullable();
            $table->date('date')->nullable();
            $table->time('time')->nullable();


            $table->decimal('to_let',8,2)->nullable();
            $table->decimal('to_lang',8,2)->nullable();
            $table->string('to_adress_name');
            $table->string('to_street_name');
            $table->string('to_description');
            $table->foreignId('to_country_id')->nullable()->constrained('countries');
            $table->foreignId('to_governorate_id')->nullable()->constrained('governorates');
            $table->foreignId('to_city_id')->nullable()->constrained('cities');
            $table->string('name');
            $table->string('phone');
            $table->foreignId('shipment_id')->nullable()->constrained('shipmments');
            $table->foreignId('safetruck_id')->nullable()->constrained('safe_trucks');
            $table->foreignId('sender_id')->nullable()->constrained('users');
            $table->foreignId('reciever_id')->nullable()->constrained('users');





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
        Schema::dropIfExists('truck_orders');
    }
};
