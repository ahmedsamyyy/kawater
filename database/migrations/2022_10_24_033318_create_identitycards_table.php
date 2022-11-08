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
        Schema::create('identitycards', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['Identification_card','passport','others'])->nullable();
            $table->string('number_card')->nullable();
            $table->string('image_card')->nullable();
            $table->string('image_card_two')->nullable();



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
        Schema::dropIfExists('identitycards');
    }
};
