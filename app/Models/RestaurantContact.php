<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantContact extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'rc_email',
        'rc_phone_number',
    ];
}
