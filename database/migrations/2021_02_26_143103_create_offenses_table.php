<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offenses', function (Blueprint $table) {
            $table->bigIncrements('ofs_id');
            $table->foreignId('ofs_student_id');
             $table->foreign('ofs_student_id')->references('stu_id')->on('students');
             $table->foreignId('ofs_offense_category_id');
             $table->foreign('ofs_offense_category_id')->references('ofc_id')->on('offense_categories');
             $table->datetime('ofs_date');
             $table->integer('total_point');
             $table->timestamps();
             $table->softdeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('offenses');
    }
}
