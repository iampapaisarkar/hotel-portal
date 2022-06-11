<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'rt_room_type',
        'rt_front_view',
        'rt_bathroom_view',
        'rt_room_picture',
    ];
}
