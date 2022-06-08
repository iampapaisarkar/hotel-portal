<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'type_of_hotel',
        'days_of_notice',
        'room_type',
        'bed_no',
        'guest_no',
        'bathroom_no',
        'room_no',
    ];
}
