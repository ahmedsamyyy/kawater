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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phone')->unique();
            $table->boolean('verifyphone')->default(false);
            $table->string('password')->nullable();
            $table->integer('code')->nullable();
            $table->string('email')->nullable();
            $table->decimal('let',8,2)->nullable();
            $table->decimal('lang',8,2)->nullable();
            $table->string('image')->nullable();
            $table->string('imagetwo')->nullable();
            $table->foreignId('country_id')->nullable()->constrained('countries');




            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
