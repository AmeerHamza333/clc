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
        Schema::create('studentapplications', function (Blueprint $table) {
            $table->id('said');
            $table->unsignedBigInteger('userid');
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('title')->nullable();
            $table->string('pfname')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('postalcode')->nullable();
            $table->string('hometelno')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('cob')->nullable();
            $table->string('nationality')->nullable();
            $table->string('edtouk')->nullable();
            $table->string('courselevel')->nullable();
            $table->string('undergraduatecourses')->nullable();
            $table->string('modeofstudy')->nullable();
            $table->string('commencement')->nullable();
            $table->string('courseduration')->nullable();
            $table->string('feespaidby')->nullable();
            $table->string('engfirstlang')->nullable();
            $table->string('anyengcourse')->nullable();
            $table->string('proficiencytest')->nullable();
            $table->string('reasonforchoosing')->nullable();
            $table->string('futureplan')->nullable();
            $table->string('kindofemp')->nullable();
            $table->string('interestandhobies')->nullable();
            $table->string('specialneeds')->nullable();
            $table->string('statebenifits')->nullable();
            $table->string('criminalrecord')->nullable();
            $table->string('specificity')->nullable();
            $table->string('coursechoosen')->nullable();
            $table->string('intellectual')->nullable();
            $table->string('fluetandlogicoral')->nullable();
            $table->string('fluetandlogicwritten')->nullable();
            $table->string('ability')->nullable();
            $table->string('perseverance')->nullable();
            $table->string('leadership')->nullable();
            $table->string('creativity')->nullable();
            $table->string('concern')->nullable();
            $table->string('refreesname')->nullable();
            $table->string('refreessign')->nullable();
            $table->string('refreesdate')->nullable();
            $table->string('marketinginfo')->nullable();
            $table->string('ethicorigin')->nullable();
            $table->string('religion')->nullable();
            $table->integer('courseid')->nullable();
            $table->string('status')->default(4);
            $table->string('statusupdateddate')->nullable();

            $table->timestamps();
            $table->foreign('userid')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentapplications');
    }
};