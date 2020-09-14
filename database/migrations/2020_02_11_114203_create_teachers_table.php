<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role')->unsigned()->default(3);
            $table->foreign('role')->references('id')->on('roles')->onDelete('cascade');
            $table->string('fullname')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('image')->nullable();
            $table->string('gender')->nullable();
            $table->string('country')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
