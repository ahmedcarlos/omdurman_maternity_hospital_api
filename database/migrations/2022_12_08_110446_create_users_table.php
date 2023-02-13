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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');
            $table->dateTime('date')->useCurrent();
            $table->string('first_name')->nullable()->default(null);
            $table->string('last_name')->nullable()->default(null);
            $table->string('national_id')->nullable()->default(null)->unique();
            $table->string('phone_number')->nullable()->default(null);
            $table->string('nationality')->nullable()->default(null);
            $table->string('designation')->nullable()->default(null);
            $table->string('status')->nullable()->default(null);
            $table->string('password')->nullable()->default(null);
            $table->string('gender')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
