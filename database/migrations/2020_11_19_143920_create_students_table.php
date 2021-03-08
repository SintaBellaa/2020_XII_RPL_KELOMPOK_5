<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('stu_id');
            $table->string('stu_nis');
            $table->foreignId('stu_user_id');
            $table->foreign('stu_user_id')->references('usr_id')->on('users');
            $table->foreignId('stu_class_id');
            $table->foreign('stu_class_id')->references('cls_id')->on('class');
            $table->string('stu_gender');
            $table->string('stu_address');
            $table->bigInteger('stu_point')->default('0');
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
        Schema::dropIfExists('students');
    }
}
