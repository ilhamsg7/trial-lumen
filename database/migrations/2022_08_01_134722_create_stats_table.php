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
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->string('driver_number', 3);
            $table->integer('win');
            $table->integer('podium');
            $table->integer('fastest_lap');
            $table->integer('world_champion')->default(0);
            $table->timestamps();

            $table->foreign('driver_number')->references('driver_number')->on('drivers')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stats');
    }
};
