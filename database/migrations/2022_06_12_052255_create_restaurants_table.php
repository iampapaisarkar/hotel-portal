<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->integer('record_id');
            $table->string('r_name');
            $table->string('r_description');
            $table->string('r_country');
            $table->string('r_state');
            $table->string('r_city');
            $table->string('r_street_name');
            $table->integer('r_street_number');
            $table->string('r_lga');
            $table->integer('r_zip_code');
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
        Schema::dropIfExists('restaurants');
    }
}
