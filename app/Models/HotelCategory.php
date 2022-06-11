<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'hcat_type_of_hotel',
        'hcat_days_of_notice',
        'hcat_room_type',
        'hcat_bed_no',
        'hcat_guest_no',
        'hcat_bathroom_no',
        'hcat_room_no',
    ];
}
