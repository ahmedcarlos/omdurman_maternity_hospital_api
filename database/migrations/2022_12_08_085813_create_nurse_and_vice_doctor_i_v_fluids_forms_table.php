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
        Schema::create('nurse_and_vice_doctor_i_v_fluids_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('volume_and_concentration')->nullable()->default(null);
            $table->string('rate_ml_br')->nullable()->default(null);
            $table->string('additives_amount')->nullable()->default(null);
            $table->string('discontinued_on')->nullable()->default(null);
            $table->string('discontinued_by')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nurse_and_vice_doctor_i_v_fluids_forms');
    }
};
