<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'hp_room_type',
        'hp_base_price',
        'hp_discount_rate',
        'hp_discount_price',
    ];
}
