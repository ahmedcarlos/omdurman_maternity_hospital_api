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
        Schema::create('vice_doctor_as_required_and_post_operative_drugs_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('drug_name')->nullable()->default(null);
            $table->integer('dose')->nullable()->default(null);
            $table->integer('route')->nullable()->default(null);
            $table->integer('frequency')->nullable()->default(null);
            $table->integer('total_no_of_doses')->nullable()->default(null);
            $table->dateTime('start_date')->useCurrent();
            $table->dateTime('stop_date')->useCurrent();
            $table->string('pharm')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vice_doctor_as_required_and_post_operative_drugs_forms');
    }
};
