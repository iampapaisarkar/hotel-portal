<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'h_name',
        'h_description',
        'h_country',
        'h_state',
        'h_city',
        'h_street_name',
        'h_street_number',
        'h_lga',
        'h_zip_code',
    ];
}
