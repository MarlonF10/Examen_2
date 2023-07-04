<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_listings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Giveaways');
            $table->string('Name_of_the_place');
            $table->time('Departure_time');
            $table->time('Expected_arrival_time');
            $table->dateTime('Register_date');
            $table->integer('passenger')->unsigned();
            $table->foreign('passenger')->references('id')->
            on('passengers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('travel_listings');
    }
}
