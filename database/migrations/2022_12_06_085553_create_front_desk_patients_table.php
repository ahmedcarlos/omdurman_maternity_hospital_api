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
        Schema::create('front_desk_patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('patient_id')->unique();
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->integer('unit')->nullable()->default(null);
            $table->string('booking_status')->nullable()->default(null);
            $table->string('name')->nullable()->default(null);
            $table->string('phone_number')->nullable()->default(null);
            $table->integer('age')->nullable()->default(null);
            $table->string('residence')->nullable()->default(null);
            $table->string('husband_name')->nullable()->default(null);
            $table->string('occupation')->nullable()->default(null);
            $table->string('blood_group_and_rh')->nullable()->default(null);
            $table->string('allergies')->nullable()->default(null);
            $table->string('nationality')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('front_desk_patients');
    }
};
