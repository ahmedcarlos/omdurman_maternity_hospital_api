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
        Schema::create('nurse_observation_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('Temp')->nullable()->default(null);
            $table->string('plus_rate')->nullable()->default(null);
            $table->string('resp_rate')->nullable()->default(null);
            $table->string('b_p')->nullable()->default(null);
            $table->string('urine_output_n')->nullable()->default(null);
            $table->string('urine_output_d')->nullable()->default(null);
            $table->string('level_of_conaciouances_muscle_tone_and_reflex')->nullable()->default(null);
            $table->string('o2_oxygen')->nullable()->default(null);
            $table->string('odema_general')->nullable()->default(null);
            $table->string('odema_ll')->nullable()->default(null);
            $table->string('urine_acetone')->nullable()->default(null);
            $table->string('urine_sugar')->nullable()->default(null);
            $table->string('urine_protein')->nullable()->default(null);
            $table->string('skin_color')->nullable()->default(null);
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
        Schema::dropIfExists('nurse_observation_forms');
    }
};
