<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'room_type',
        'front_view',
        'bathroom_view',
        'room_picture',
    ];
}
