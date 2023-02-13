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
        Schema::create('vice_doctor_anticoagulation_charts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('tick_for_inr')->nullable()->default(null);
            $table->integer('inr')->nullable()->default(null);
            $table->integer('aptt')->nullable()->default(null);
            $table->integer('apt')->nullable()->default(null);
            $table->integer('dosage_of_warfarin')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vice_doctor_anticoagulation_charts');
    }
};
