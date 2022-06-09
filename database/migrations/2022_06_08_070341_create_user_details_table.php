<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->id();
            $table->integer('record_id');
            $table->string('ud_user_name');
            $table->string('ud_first_name');
            $table->string('ud_last_name');
            $table->string('ud_phone_number');
            $table->string('ud_email');
            $table->date('ud_dob');
            $table->string('ud_gender');
            $table->string('ud_country');
            $table->string('ud_state');
            $table->string('ud_city');
            $table->string('ud_lga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_details');
    }
}
