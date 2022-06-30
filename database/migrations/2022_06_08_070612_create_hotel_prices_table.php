<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('record_id');
            $table->string('hp_room_type');
            $table->float('hp_base_price');
            $table->float('hp_discount_rate');
            $table->integer('hp_discount_price');
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
        Schema::dropIfExists('hotel_prices');
    }
}
