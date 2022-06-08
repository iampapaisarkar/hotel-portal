<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'ac_number',
        'name_of_bank',
        'id_type',
        'id_document',
        'id_number',
    ];
}
