<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicant', function (Blueprint $table) {
            $table->id();
            $table->string('name',55)->nullable();
            $table->string('email',55)->nullable();
            $table->string('address',255)->nullable();
            $table->string('gender',55)->nullable();
            $table->string('contact_number',55)->nullable();
            $table->string('preferred_location',55)->nullable();
            $table->string('expected_ctc',55)->nullable();
            $table->string('current_ctc',55)->nullable();
            $table->string('notice_period',55)->nullable();
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
        Schema::dropIfExists('applicant');
    }
}
