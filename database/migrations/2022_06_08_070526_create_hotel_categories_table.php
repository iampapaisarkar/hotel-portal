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
            $table->string('type_of_hotel');
            $table->string('days_of_notice');
            $table->string('room_type');
            $table->integer('bed_no');
            $table->integer('guest_no');
            $table->integer('bathroom_no');
            $table->integer('room_no');
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
