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
        Schema::create('front_desk_statistic_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('hospital_name')->nullable()->default(null);
            $table->string('hospital_address')->nullable()->default(null);
            $table->integer('Registration_no_in_register')->nullable()->default(null);
            $table->string('Section')->nullable()->default(null);
            $table->string('Amber')->nullable()->default(null);
            $table->string('Sex')->nullable()->default(null);
            $table->string('patient_address')->nullable()->default(null);
            $table->string('patients_profession')->nullable()->default(null);
            $table->date('date_of_entry')->nullable()->default(null);
            $table->date('exit_date')->nullable()->default(null);
            $table->string('final_diagnosis')->nullable()->default(null);
            $table->string('other_diseases_and_complications')->nullable()->default(null);
            $table->date('incident_date')->nullable()->default(null);
            $table->time('incident_time')->nullable()->default(null);
            $table->string('diabetes_test')->nullable()->default(null);
            $table->string('immunization_against_diseases')->nullable()->default(null);
            $table->date('immunization_date')->nullable()->default(null);
            $table->string('immunization_place')->nullable()->default(null);
            $table->string('patients_condition_upon_exit')->nullable()->default(null);
            $table->string('was_the_body_autopsied')->nullable()->default(null);
            $table->string('accident_cause')->nullable()->default(null);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('front_desk_statistic_forms');
    }
};
