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
        Schema::create('nurse_investigation_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('urine_analysis_color')->nullable()->default(null);
            $table->string('urine_analysis_cells')->nullable()->default(null);
            $table->string('urine_analysis_sugar')->nullable()->default(null);
            $table->string('urine_analysis_proteins')->nullable()->default(null);
            $table->string('urine_analysis_cream_stains')->nullable()->default(null);
            $table->string('urine_analysis_zn_stain')->nullable()->default(null);
            $table->string('urine_analysis_clutures_and_sensitivity')->nullable()->default(null);
            $table->string('stool_analysis_color')->nullable()->default(null);
            $table->string('stool_analysis_cells')->nullable()->default(null);
            $table->string('stool_analysis_sugar')->nullable()->default(null);
            $table->string('stool_analysis_proteins')->nullable()->default(null);
            $table->string('stool_analysis_cream_stains')->nullable()->default(null);
            $table->string('stool_analysis_zn_stain')->nullable()->default(null);
            $table->string('stool_analysis_clutures_and_sensitivity')->nullable()->default(null);
            $table->string('csf_color')->nullable()->default(null);
            $table->string('csf_cells')->nullable()->default(null);
            $table->string('csf_sugar')->nullable()->default(null);
            $table->string('csf_proteins')->nullable()->default(null);
            $table->string('csf_cream_stains')->nullable()->default(null);
            $table->string('csf_zn_stain')->nullable()->default(null);
            $table->string('csf_clutures_and_sensitivity')->nullable()->default(null);
            $table->string('pleural_fluid_color')->nullable()->default(null);
            $table->string('pleural_fluid_cells')->nullable()->default(null);
            $table->string('pleural_fluid_sugar')->nullable()->default(null);
            $table->string('pleural_fluid_proteins')->nullable()->default(null);
            $table->string('pleural_fluid_cream_stains')->nullable()->default(null);
            $table->string('pleural_fluid_zn_stain')->nullable()->default(null);
            $table->string('pleural_fluid_clutures_and_sensitivity')->nullable()->default(null);
            $table->string('peritoneal_fluid_color')->nullable()->default(null);
            $table->string('peritoneal_fluid_cells')->nullable()->default(null);
            $table->string('peritoneal_fluid_sugar')->nullable()->default(null);
            $table->string('peritoneal_fluid_proteins')->nullable()->default(null);
            $table->string('peritoneal_fluid_cream_stains')->nullable()->default(null);
            $table->string('peritoneal_fluid_zn_stain')->nullable()->default(null);
            $table->string('peritoneal_fluid_clutures_and_sensitivity')->nullable()->default(null);
            $table->string('vaginal_swab_color')->nullable()->default(null);
            $table->string('vaginal_swab_cells')->nullable()->default(null);
            $table->string('vaginal_swab_sugar')->nullable()->default(null);
            $table->string('vaginal_swab_proteins')->nullable()->default(null);
            $table->string('vaginal_swab_cream_stains')->nullable()->default(null);
            $table->string('vaginal_swab_zn_stain')->nullable()->default(null);
            $table->string('vaginal_swab_clutures_and_sensitivity')->nullable()->default(null);
            $table->string('puss_color')->nullable()->default(null);
            $table->string('puss_cells')->nullable()->default(null);
            $table->string('puss_cream_stains')->nullable()->default(null);
            $table->string('puss_zn_stain')->nullable()->default(null);
            $table->string('puss_clutures_and_sensitivity')->nullable()->default(null);
            $table->string('cultures_speciment_1')->nullable()->default(null);
            $table->string('cultures_speciment_2')->nullable()->default(null);
            $table->string('cultures_speciment_3')->nullable()->default(null);
            $table->string('cultures_speciment_4')->nullable()->default(null);
            $table->string('cultures_speciment_5')->nullable()->default(null);
            $table->string('biopsies_speciment_1')->nullable()->default(null);
            $table->string('biopsies_speciment_2')->nullable()->default(null);
            $table->string('biopsies_speciment_3')->nullable()->default(null);
            $table->string('bone_marrow')->nullable()->default(null);
            $table->string('hiv')->nullable()->default(null);
            $table->string('hepatitis_b')->nullable()->default(null);
            $table->string('hepatitis_c')->nullable()->default(null);
            $table->string('other')->nullable()->default(null);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nurse_investigation_forms');
    }
};
