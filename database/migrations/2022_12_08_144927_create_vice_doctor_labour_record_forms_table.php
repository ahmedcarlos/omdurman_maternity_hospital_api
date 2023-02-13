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
        Schema::create('vice_doctor_labour_record_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('cx_position')->nullable()->default(null);
            $table->double('cx_effacement')->nullable()->default(null);
            $table->string('cx_consistency')->nullable()->default(null);
            $table->float('cx_dilatation')->nullable()->default(null);
            $table->string('presenting_part_station')->nullable()->default(null);
            $table->string('presenting_part_position')->nullable()->default(null);
            $table->string('presenting_part_caput')->nullable()->default(null);
            $table->string('presenting_part_moulding')->nullable()->default(null);
            $table->string('membranes')->nullable()->default(null);
            $table->time('if_ruptur_time')->nullable()->default(null);
            $table->string('amount')->nullable()->default(null);
            $table->string('meconium')->nullable()->default(null);
            $table->string('special_instructions')->nullable()->default(null);
            $table->string('how_reptured')->nullable()->default(null);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vice_doctor_labour_record_forms');
    }
};
