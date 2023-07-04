<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Date');
            $table->time('Departure_time');
            $table->time('Expected_arrival_time');
            $table->string('Imported');
            $table->dateTime('Register_date');
            $table->integer('rout')->unsigned();
            $table->foreign('rout')->references('id')->
            on('routs')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('travel_tickets');
    }
}
