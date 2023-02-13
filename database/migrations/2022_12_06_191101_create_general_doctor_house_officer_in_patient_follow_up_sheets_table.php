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
        Schema::create('general_doctor_house_officer_in_patient_follow_up_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('bp')->nullable()->default(null);
            $table->string('urine')->nullable()->default(null);
            $table->string('fhr')->nullable()->default(null);
            $table->string('odema')->nullable()->default(null);
            $table->string('remarks')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('general_doctor_house_officer_in_patient_follow_up_sheets');
    }
};
