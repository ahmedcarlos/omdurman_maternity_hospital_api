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
        Schema::create('front_desk_statistics_supplements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('baby_name')->nullable()->default(null);
            $table->string('baby_gender')->nullable()->default(null);
            $table->string('baby_status')->nullable()->default(null);
            $table->string('baby_type')->nullable()->default(null);
            $table->dateTime('birth_date')->useCurrent();
            $table->string('birth_place')->nullable()->default(null);
            $table->string('mothers_education')->nullable()->default(null);
            $table->string('mother_industry')->nullable()->default(null);
            $table->string('marriage_duration')->nullable()->default(null);
            $table->string('establish_marriage')->nullable()->default(null);
            $table->string('father_name')->nullable()->default(null);
            $table->integer('father_age')->nullable()->default(null);
            $table->integer('number_of_miscarriages')->nullable()->default(null);
            $table->integer('baby_arrangement')->nullable()->default(null);
            $table->string('fathers_nationality')->nullable()->default(null);
            $table->string('religion')->nullable()->default(null);
            $table->string('operation_type')->nullable()->default(null);
            $table->string('father_industry')->nullable()->default(null);
            $table->string('fathers_education')->nullable()->default(null);
            $table->string('normal_position_shape')->nullable()->default(null);
            $table->string('fathers_residence')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('front_desk_statistics_supplements');
    }
};
