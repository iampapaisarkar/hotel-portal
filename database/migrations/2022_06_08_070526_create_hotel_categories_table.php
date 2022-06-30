<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('record_id');
            $table->string('hcat_type_of_hotel');
            $table->string('hcat_days_of_notice');
            $table->string('hcat_room_type');
            $table->string('hcat_amenities');
            $table->string('hcat_front_view');
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
        Schema::dropIfExists('hotel_categories');
    }
}
