<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Brand');
            $table->string('Model');
            $table->string('Enabled');
            $table->string('Condition');
            $table->string('Papels_Transport');
            $table->dateTime('Register_date');
            $table->integer('passenger')->unsigned();
            $table->foreign('passenger')->references('id')->
            on('passengers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('driver')->unsigned();
            $table->foreign('driver')->references('id')->
            on('drivers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('mechanic')->unsigned();
            $table->foreign('mechanic')->references('id')->
            on('mechanics')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('agency')->unsigned();
            $table->foreign('agency')->references('id')->
            on('agencies')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('transports');
    }
}
