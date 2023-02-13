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
        Schema::create('vice_doctor_clinical_discharge_summaries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('final_dagnosis')->nullable()->default(null);
            $table->string('summary')->nullable()->default(null);
            $table->string('operation')->nullable()->default(null);
            $table->string('treatment_recommended_on_discharge')->nullable()->default(null);
            $table->string('follow_up_arrangements')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vice_doctor_clinical_discharge_summaries');
    }
};
