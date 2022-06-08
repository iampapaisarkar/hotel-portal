<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'min_booking_day',
        'max_booking_day',
        'checkin_time',
        'checkout_time',
        'cancellation_type'
    ];
}
