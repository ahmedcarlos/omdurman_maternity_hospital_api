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
        Schema::create('vice_doctor_haematology_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->float('hb')->nullable()->default(null);
            $table->float('wbcs')->nullable()->default(null);
            $table->float('neutrophils')->nullable()->default(null);
            $table->float('lymphocytes')->nullable()->default(null);
            $table->float('eosinophils')->nullable()->default(null);
            $table->float('basophils')->nullable()->default(null);
            $table->float('monocytes')->nullable()->default(null);
            $table->float('platelets')->nullable()->default(null);
            $table->float('retlculocytes')->nullable()->default(null);
            $table->float('esr')->nullable()->default(null);
            $table->float('haematocrit_pcv')->nullable()->default(null);
            $table->float('mcv')->nullable()->default(null);        
            $table->float('mch')->nullable()->default(null);
            $table->float('mchc')->nullable()->default(null);
            $table->float('rbcs')->nullable()->default(null);
            $table->string('peripheral_blood')->nullable()->default(null);
            $table->string('bone_marrow')->nullable()->default(null);
            $table->string('hb_electrophoresis')->nullable()->default(null);
            $table->string('coombs_test')->nullable()->default(null);
            $table->float('prothrombin_pt')->nullable()->default(null);
            $table->float('inr')->nullable()->default(null);
            $table->time('partial_thromboplastin_time_pt')->nullable()->default(null);
            $table->time('bleeding_time')->nullable()->default(null);
            $table->time('clotting_time')->nullable()->default(null);
            $table->string('sickling_test')->nullable()->default(null);
            $table->string('serum_b12')->nullable()->default(null);
            $table->string('folic_acid')->nullable()->default(null);
            $table->float('serum_iron_ferritin')->nullable()->default(null);
            $table->float('tibcs')->nullable()->default(null);
            $table->string('serum_protein_electrophoresis')->nullable()->default(null);
            $table->string('others')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vice_doctor_haematology_results');
    }
};
