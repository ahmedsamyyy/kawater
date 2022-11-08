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
        Schema::create('update_images', function (Blueprint $table) {
            $table->id();
            $table->string('image_first')->nullable();
            $table->string('image_second')->nullable();
            $table->string('image_mine_one')->nullable();
            $table->string('image_mine_two')->nullable();
            $table->decimal('let',10,2)->nullable();
            $table->decimal('lang',10,2)->nullable();



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
        Schema::dropIfExists('update_images');
    }
};
