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
        Schema::create('vice_doctor_antenatal_follow_ups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('b_p')->nullable()->default(null);
            $table->integer('g_a')->nullable()->default(null);
            $table->integer('f_l')->nullable()->default(null);
            $table->string('pres')->nullable()->default(null);
            $table->string('eng')->nullable()->default(null);
            $table->string('f_h')->nullable()->default(null);
            $table->integer('h_b')->nullable()->default(null);
            $table->string('urine')->nullable()->default(null);
            $table->string('comment')->nullable()->default(null);
            $table->string('next_visit')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vice_doctor_antenatal_follow_ups');
    }
};
