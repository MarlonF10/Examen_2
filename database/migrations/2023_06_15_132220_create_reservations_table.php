<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('No_Reservation');
            $table->string('Advance');
            $table->dateTime('Register_date');
            $table->integer('customer')->unsigned();
            $table->foreign('customer')->references('id')->
            on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('promotion')->unsigned();
            $table->foreign('promotion')->references('id')->
            on('promotions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('reservations');
    }
}
