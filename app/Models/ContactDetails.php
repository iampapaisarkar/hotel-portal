<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'cd_name',
        'cd_address',
        'cd_phone_number',
        'cd_email'
    ];
}
