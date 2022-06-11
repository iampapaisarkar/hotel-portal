<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'bday_min_booking_day',
        'bday_max_booking_day',
        'bday_checkin_time',
        'bday_checkout_time',
        'bday_cancellation_type'
    ];
}
