<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomSetup extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'ha_room_type',
        'ha_room_type_amenities',
        'ha_room_type_no',
        'ha_bed_no',
        'ha_guest_no',
        'ha_bathroom_no',
    ];
}
