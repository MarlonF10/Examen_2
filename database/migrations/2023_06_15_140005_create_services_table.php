<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Star_Time');
            $table->string('End_Time');
            $table->Date('Day');
            $table->string('Type_of_Services');
            $table->string('Basic_Cost');
            $table->string('Enable');
            $table->integer('rout')->unsigned();
            $table->foreign('rout')->references('id')->
            on('routs')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('passenger')->unsigned();
            $table->foreign('passenger')->references('id')->
            on('passengers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('customer')->unsigned();
            $table->foreign('customer')->references('id')->
            on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('transport')->unsigned();
            $table->foreign('transport')->references('id')->
            on('transports')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('services');
    }
}
