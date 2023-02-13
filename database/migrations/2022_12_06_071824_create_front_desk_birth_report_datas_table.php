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
        Schema::create('front_desk_birth_report_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->dateTime('birth_date')->useCurrent();
            $table->time('Fetal_birth_hour');
            $table->string('birth_type')->nullable()->default(null);
            $table->time('placenta_birth_hour');
            $table->string('blood_quantity')->nullable()->default(null);
            $table->string('newborn_status')->nullable()->default(null);
            $table->string('birth_weight')->nullable()->default(null);
            $table->string('breast_feeding_practice')->nullable()->default(null);
            $table->string('wound')->nullable()->default(null);
            $table->string('vitamin_k')->nullable()->default(null);
            $table->string('token')->nullable()->default(null);
            $table->string('baby_type')->nullable()->default(null);





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('front_desk_birth_report_datas');
    }
};
