<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'name',
        'description',
        'country',
        'state',
        'city',
        'street_name',
        'street_number',
        'lga',
        'zip_code',
    ];
}
