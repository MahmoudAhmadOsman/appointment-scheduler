<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('name');
                $table->string('fee');
                $table->string('details');
                $table->string('appTime');
                $table->string('location');
                $table->string('doctor');
                $table->string('appMaker');
                $table->string('amount');
                //$table->string('profile_image')->nullable();
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
        Schema::dropIfExists('appointments');
    }
}
