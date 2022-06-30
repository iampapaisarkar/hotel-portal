<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_setups', function (Blueprint $table) {
            $table->id();
            $table->integer('record_id');
            $table->string('ha_room_type');
            $table->string('ha_room_type_amenities');
            $table->integer('ha_room_type_no');
            $table->integer('ha_bed_no');
            $table->integer('ha_guest_no');
            $table->integer('ha_bathroom_no');
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
        Schema::dropIfExists('room_setups');
    }
}
