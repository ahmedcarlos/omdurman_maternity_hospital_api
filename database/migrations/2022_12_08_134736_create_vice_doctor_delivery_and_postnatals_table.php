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
        Schema::create('vice_doctor_delivery_and_postnatals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('mode_of_delivery')->nullable()->default(null);
            $table->string('placenta')->nullable()->default(null);
            $table->string('episiotomy')->nullable()->default(null);
            $table->string('decircumcision')->nullable()->default(null);
            $table->string('location')->nullable()->default(null);
            $table->string('anti_d')->nullable()->default(null);
            $table->string('blood_loss')->nullable()->default(null);
            $table->string('comments')->nullable()->default(null);
            $table->string('baby_gender')->nullable()->default(null);
            $table->string('baby_number')->nullable()->default(null);
            $table->integer('weight')->nullable()->default(null);
            $table->integer('apgar_score')->nullable()->default(null);
            $table->string('refer_to_scbu')->nullable()->default(null);
            $table->string('postnatal_follow_up')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vice_doctor_delivery_and_postnatals');
    }
};
