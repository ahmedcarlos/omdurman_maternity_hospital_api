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
        Schema::create('vice_doctor_discharge_drugs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('drug_name')->nullable()->default(null);
            $table->string('dose')->nullable()->default(null);
            $table->string('route')->nullable()->default(null);
            $table->string('frequency')->nullable()->default(null);
            $table->integer('no_day')->nullable()->default(null);
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
        Schema::dropIfExists('vice_doctor_discharge_drugs');
    }
};
