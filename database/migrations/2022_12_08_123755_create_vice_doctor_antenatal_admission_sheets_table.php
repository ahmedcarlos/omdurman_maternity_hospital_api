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
        Schema::create('vice_doctor_antenatal_admission_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('complaint')->nullable()->default(null);
            $table->string('history_of_presenting_illness')->nullable()->default(null);
            $table->string('pulse')->nullable()->default(null);
            $table->string('bp')->nullable()->default(null);
            $table->integer('temp')->nullable()->default(null);
            $table->string('general_condition')->nullable()->default(null);
            $table->string('general_condition_list')->nullable()->default(null);
            $table->string('cvs_and_chest_examination')->nullable()->default(null);
            $table->integer('fundal_height')->nullable()->default(null);
            $table->string('lie')->nullable()->default(null);
            $table->string('presentation')->nullable()->default(null);
            $table->string('fhr')->nullable()->default(null);
            $table->string('fm')->nullable()->default(null);
            $table->string('vaginal_examination')->nullable()->default(null);
            $table->string('diagnosis')->nullable()->default(null);
            $table->string('immediate_instruction')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vice_doctor_antenatal_admission_sheets');
    }
};
