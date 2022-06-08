<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelAmenities extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'amenities',
        'room_type',
        'room_type_amenities',
    ];
}
