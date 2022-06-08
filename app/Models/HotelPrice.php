<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'room_type',
        'corporate_price',
        'discount_rate',
    ];
}
