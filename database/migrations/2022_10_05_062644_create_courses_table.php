<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            // $table->engine = 'InnoDB';
            $table->id();
            $table->string('coursename');
            $table->string('startdate');
            $table->string('enddate');
            $table->string('courselevel');
            $table->string('studymode');
            $table->string('fee');
            $table->boolean('isinstallment')->default(0);
            $table->string('courseduration2');
            // $table->integer('fcourseid')->unsigned();
           
            // $table->foreignId('fid')->references('id')->on('foundationcourses')->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
            // $table->foreign('fcouid')->references('id')->on('foundation_courses')->onDelete('cascade');
        });

       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}