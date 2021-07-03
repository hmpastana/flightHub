<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips_flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flight_id');
            $table->unsignedBigInteger('trip_id');

            $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');
            $table->foreign('trip_id')->references('id')->on('trips')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips_flights');
    }
}
