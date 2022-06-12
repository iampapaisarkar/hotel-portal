<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantAmenities extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'ra_amenities',
        'ra_type',
    ];
}
