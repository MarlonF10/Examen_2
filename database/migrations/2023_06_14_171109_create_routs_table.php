<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Route');
            $table->string('Route_Schedule');
            $table->string('Day');
            $table->string('Description');
            $table->datetime('Register_date');
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
        Schema::dropIfExists('routs');
    }
}
