<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Description');
            $table->string('Cost');
            $table->date('Date_from');
            $table->date('Date_to');
            $table->string('Image');
            $table->string('Enable');
            $table->date('Register_date');
            $table->integer('rout')->unsigned();
            $table->foreign('rout')->references('id')->
            on('routs')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('customer')->unsigned();
            $table->foreign('customer')->references('id')->
            on('customers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('promotions');
    }
}
