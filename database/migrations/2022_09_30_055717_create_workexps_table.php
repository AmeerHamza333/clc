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
        Schema::create('workexps', function (Blueprint $table) {
            $table->id('workexps_id');
            $table->date('datefrom')->nullable();
            $table->date('dateto')->nullable();
            $table->string('ftpt')->nullable();
            $table->string('postsheld')->nullable();
            $table->string('orgname')->nullable();
            $table->string('orgaddress')->nullable();
            $table->string('despofduties')->nullable();
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
        Schema::dropIfExists('workexps');
    }
};
