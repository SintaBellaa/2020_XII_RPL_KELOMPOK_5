<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOffenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offense', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('no_student');
            $table->foreign('no_student')->references('id')->on('students');
            $table->foreignId('no_category');
            $table->foreign('no_category')->references('id')->on('offense_category')->onDelete('cascade')->onUpdate('cascade');
            $table->string('total_point');
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
        Schema::dropIfExists('offense');
    }
}
