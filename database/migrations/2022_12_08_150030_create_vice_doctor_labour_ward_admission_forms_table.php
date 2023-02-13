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
        Schema::create('vice_doctor_labour_ward_admission_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->integer('gravida')->nullable()->default(null);
            $table->integer('par_1')->nullable()->default(null);
            $table->integer('par_2')->nullable()->default(null);
            $table->date('lmp')->nullable()->default(null);
            $table->string('edd')->nullable()->default(null);
            $table->integer('ga')->nullable()->default(null);
            $table->string('c_o')->nullable()->default(null);
            $table->string('relevant_past_history')->nullable()->default(null);
            $table->string('general_condition')->nullable()->default(null);
            $table->string('bp')->nullable()->default(null);
            $table->string('pulse')->nullable()->default(null);
            $table->double('temp')->nullable()->default(null);
            $table->string('chest_and_cv_examination')->nullable()->default(null);
            $table->double('fundal_height')->nullable()->default(null);
            $table->string('lie')->nullable()->default(null);
            $table->string('presentation')->nullable()->default(null);
            $table->double('engagement')->nullable()->default(null);
            $table->string('amount_of_liquor')->nullable()->default(null);
            $table->string('fhr')->nullable()->default(null);
            $table->string('fm')->nullable()->default(null);
            $table->string('cx_position')->nullable()->default(null);
            $table->double('cx_effacement')->nullable()->default(null);
            $table->string('cx_consistency')->nullable()->default(null);
            $table->double('cx_dilatation')->nullable()->default(null);
            $table->string('presenting_part_station')->nullable()->default(null);
            $table->string('presenting_part_position')->nullable()->default(null);
            $table->string('presenting_part_caput')->nullable()->default(null);
            $table->string('presenting_part_moulding')->nullable()->default(null);
            $table->string('membranes')->nullable()->default(null);
            $table->time('if_ruptur_time')->nullable()->default(null);
            $table->string('how_reptured')->nullable()->default(null);
            $table->string('amount')->nullable()->default(null);
            $table->string('meconium')->nullable()->default(null);
            $table->double('investigations_hb')->nullable()->default(null);
            $table->string('investigations_blood_group')->nullable()->default(null);
            $table->string('investigations_urine')->nullable()->default(null);
            $table->string('uss')->nullable()->default(null);
            $table->string('ctg')->nullable()->default(null);
            $table->string('others')->nullable()->default(null);
            $table->time('time_of_contractions_start')->nullable()->default(null);
            $table->string('condition')->nullable()->default(null);
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vice_doctor_labour_ward_admission_forms');
    }
};
