<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->integer('record_id');
            $table->string('h_name');
            $table->string('h_description');
            $table->string('h_country');
            $table->string('h_state');
            $table->string('h_city');
            $table->string('h_street_name');
            $table->integer('h_street_number');
            $table->string('h_lga');
            $table->integer('h_zip_code');
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
        Schema::dropIfExists('hotels');
    }
}
