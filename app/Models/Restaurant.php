<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'r_name',
        'r_description',
        'r_country',
        'r_state',
        'r_city',
        'r_street_name',
        'r_street_number',
        'r_lga',
        'r_zip_code',
    ];
}
