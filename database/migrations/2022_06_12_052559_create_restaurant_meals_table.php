<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_meals', function (Blueprint $table) {
            $table->id();
            $table->string('record_id');
            $table->string('rm_restaurant_type');
            $table->string('rm_meals');
            $table->float('rm_price');
            $table->string('rm_images');
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
        Schema::dropIfExists('restaurant_meals');
    }
}
