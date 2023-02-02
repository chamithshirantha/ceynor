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
        Schema::create('passenger_boats', function (Blueprint $table) {
            $table->id();
            $table->string('boat_name')->nullable();
            $table->string('image')->nullable();
            $table->string('short_description')->nullable();
            $table->string('length')->nullable();
            $table->string('beam')->nullable();
            $table->string('draft')->nullable();
            $table->string('main_hull_beam')->nullable();
            $table->string('fuel')->nullable();
            $table->string('water')->nullable();
            $table->string('seating_capacity')->nullable();
            $table->string('speed')->nullable();
            $table->string('beds')->nullable();
            $table->string('hull_type')->nullable();
            $table->string('fish_hold_capacity')->nullable();
            $table->string('price')->nullable();
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
        Schema::dropIfExists('passenger_boats');
    }
};
