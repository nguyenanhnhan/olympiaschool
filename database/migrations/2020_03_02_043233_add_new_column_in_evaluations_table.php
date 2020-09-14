<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnInEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('evaluations', function (Blueprint $table) {
            $table->string('lesson_flow')->nullable();
            $table->string('strengths')->nullable();
            $table->string('improvement')->nullable();
            $table->json('part2b')->nullable();
            $table->json('part2c')->nullable();
            $table->json('part2d')->nullable();
            $table->json('part3a')->nullable();
            $table->json('part3b')->nullable();
            $table->json('part3c')->nullable();
            $table->json('part3d')->nullable();
            $table->json('part4a')->nullable();
            $table->json('part4b')->nullable();
            $table->json('part4c')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evaluations', function (Blueprint $table) {
            //
        });
    }
}
