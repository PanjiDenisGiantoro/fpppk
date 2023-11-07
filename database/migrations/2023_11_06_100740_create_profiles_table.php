<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->unique();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('NRA')->nullable();
            $table->string('degree')->nullable();
            $table->string('place')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('religion')->nullable();
            $table->string('address')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('village_id')->nullable();
            $table->string('rtrw')->nullable();
            $table->string('status')->nullable();
            $table->string('tipe')->nullable();
            $table->string('tahun')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('wa')->nullable();
            $table->string('fb')->nullable();
            $table->string('ig')->nullable();
            $table->string('tw')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('tiktok')->nullable();
            $table->string('telegram')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
