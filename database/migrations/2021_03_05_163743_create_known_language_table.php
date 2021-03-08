<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKnownLanguageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('known_language', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('applicant_id')->nullable();
            $table->string('language',55)->nullable();
            $table->boolean('is_read')->default(0);
            $table->boolean('is_write')->default(0);
            $table->boolean('is_speak')->default(0);
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
        Schema::dropIfExists('known_language');
    }
}
