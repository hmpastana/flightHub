<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->char('airline',2);
            $table->integer('number');
            $table->char('departure_airport', 3);
            $table->time('departure_time');
            $table->char('arrival_airport', 3);
            $table->time('arrival_time');
            $table->decimal('price');
            $table->timestamps();

            $table->unique(['number', 'airline']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
}
