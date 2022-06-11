<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelAmenities extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'ha_amenities',
        'ha_room_type',
        'ha_room_type_amenities',
    ];
}
