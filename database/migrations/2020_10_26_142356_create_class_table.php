<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class', function (Blueprint $table) {
            $table->bigIncrements('cls_id');
            $table->foreignId('cls_major_id');
            $table->foreign('cls_major_id')->references('mjr_id')->on('majors');
            $table->foreignId('cls_grade_level_id');
            $table->foreign('cls_grade_level_id')->references('grd_id')->on('grade_levels');
            $table->integer('cls_number');

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
        Schema::dropIfExists('class');
    }
}
