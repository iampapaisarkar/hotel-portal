<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_days', function (Blueprint $table) {
            $table->id();
            $table->integer('record_id');
            $table->date('bday_min_booking_day');
            $table->date('bday_max_booking_day');
            $table->time('bday_checkin_time');
            $table->time('bday_checkout_time');
            $table->string('bday_cancellation_type');
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
        Schema::dropIfExists('booking_days');
    }
}
