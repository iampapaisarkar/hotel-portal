<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'od_ac_number',
        'od_name_of_bank',
        'od_id_type',
        'od_id_document',
        'od_id_number',
    ];
}
