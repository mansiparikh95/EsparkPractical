<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTechnicalExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('technical_experience', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('applicant_id')->nullable();
            $table->string('technology',55)->nullable();
            $table->enum('skills',['','Biginner','Mediator','Expert']);
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
        Schema::dropIfExists('technical_experience');
    }
}
