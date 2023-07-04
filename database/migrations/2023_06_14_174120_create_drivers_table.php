<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name');
            $table->string('First_Name');
            $table->string('Second_Name');
            $table->string('DNI');
            $table->string('Number_Phone');
            $table->string('Email');
            $table->string('Address');
            $table->string('Gender');
            $table->string('License');
            $table->string('Municipality');
            $table->string('Department');
            $table->string('Age');
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
        Schema::dropIfExists('drivers');
    }
}
