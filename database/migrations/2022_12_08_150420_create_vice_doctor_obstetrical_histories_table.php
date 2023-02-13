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
        Schema::create('vice_doctor_obstetrical_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->integer('gr')->nullable()->default(null);
            $table->integer('para_1')->nullable()->default(null);
            $table->integer('para_2')->nullable()->default(null);
            $table->string('drug_history')->nullable()->default(null);
            $table->date('lmp')->nullable()->default(null);
            $table->string('edd')->nullable()->default(null);
            $table->date('scan_edd')->nullable()->default(null);
            $table->string('past_medical_history')->nullable()->default(null);
            $table->string('past_surgical_history')->nullable()->default(null);
            $table->string('social_history')->nullable()->default(null);
            $table->string('family_history')->nullable()->default(null);
            $table->string('others')->nullable()->default(null);
            $table->string('chest_cvs_examination')->nullable()->default(null);
            $table->string('comments_on_par')->nullable()->default(null);
            $table->string('comments_and_special_plans')->nullable()->default(null);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vice_doctor_obstetrical_histories');
    }
};
