<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aqachieves', function (Blueprint $table) {
            $table->id('aqachieve_id');
            $table->date('examdate')->nullable();
            $table->string('examingboard')->nullable();
            $table->string('subjects')->nullable();
            $table->string('qualification')->nullable();
            $table->string('resultachieved')->nullable();
            $table->unsignedBigInteger('said');
            $table->string('iscompleted')->nullable();
            $table->foreign('said')->references('said')->on('studentapplications');
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
        Schema::dropIfExists('aqachieves');
    }
};
