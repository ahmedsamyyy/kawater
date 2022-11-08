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
        Schema::create('driver_logins', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('password')->nullable();
            $table->integer('code_driver')->nullable();
            $table->foreignId('country_id')->nullable()->constrained('countries');
            $table->foreignId('identitycard_id')->nullable()->constrained('identitycards');
            $table->integer('driver_shipmment_id')->nullable();
            $table->foreignId('update_image_id')->nullable()->constrained('update_images');













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
        Schema::dropIfExists('driver_logins');
    }
};
