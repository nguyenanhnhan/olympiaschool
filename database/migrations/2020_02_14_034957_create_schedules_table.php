<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_location')->unsigned();
            $table->foreign('id_location')->references('id')->on('addresses')->onDelete('cascade');
            $table->integer('id_teacher')->unsigned();
            $table->foreign('id_teacher')->references('id')->on('teachers')->onDelete('cascade');
            $table->string('class')->nullable();
            $table->timestamp('time')->nullable();
            $table->string('time1')->nullable();

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
        Schema::dropIfExists('schedules');
    }
}
