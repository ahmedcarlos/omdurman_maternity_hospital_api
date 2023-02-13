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
        Schema::create('vice_doctor_operation_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('operation')->nullable()->default(null);
            $table->string('indication_1')->nullable()->default(null);
            $table->string('indication_2')->nullable()->default(null);
            $table->string('surgeon')->nullable()->default(null);
            $table->string('anaesthetist')->nullable()->default(null);
            $table->string('assistant')->nullable()->default(null);
            $table->string('anaesthesia')->nullable()->default(null);
            $table->string('incision')->nullable()->default(null);
            $table->string('process')->nullable()->default(null);
            $table->string('blood_loss')->nullable()->default(null);
            $table->string('ovaries_and_tubes_checked')->nullable()->default(null);
            $table->string('baby')->nullable()->default(null);
            $table->double('weight')->nullable()->default(null);
            $table->double('apgar_score')->nullable()->default(null);
            $table->string('treatment')->nullable()->default(null);
            $table->string('antibiotics')->nullable()->default(null);
            $table->string('analgesia')->nullable()->default(null);
            $table->string('anticoagulant')->nullable()->default(null);
            $table->string('iv_fluids')->nullable()->default(null);
            $table->string('blood_transfusion')->nullable()->default(null);
            $table->string('recommendations_for_next_pregnancy')->nullable()->default(null);
            $table->string('refer_to_scub')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vice_doctor_operation_notes');
    }
};
