<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'ud_first_name',
        'ud_last_name',
        'ud_phone_number',
        'ud_email',
        'ud_dob',
        'ud_gender',
        'ud_country',
        'ud_state',
        'ud_city',
        'ud_lga',
    ];
}
