<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education_details', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('applicant_id')->nullable();
            $table->string('ssc_board',255)->nullable();
            $table->string('ssc_year',255)->nullable();
            $table->string('ssc_percentage',255)->nullable();
            $table->string('hsc_board',255)->nullable();
            $table->string('hsc_year',255)->nullable();
            $table->string('hsc_percentage',255)->nullable();
            $table->string('graduation_board',255)->nullable();
            $table->string('graduation_year',255)->nullable();
            $table->string('graduation_percentage',255)->nullable();
            $table->string('master_board',255)->nullable();
            $table->string('master_year',255)->nullable();
            $table->string('master_percentage',255)->nullable();
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
        Schema::dropIfExists('education_details');
    }
}
