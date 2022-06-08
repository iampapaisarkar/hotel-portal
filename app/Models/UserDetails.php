<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'username',
        'first_name',
        'last_name',
        'phone_number',
        'email',
        'dob',
        'gender',
        'country',
        'state',
        'city',
        'lga',
    ];
}
