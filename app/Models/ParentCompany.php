<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentCompany extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'pc_name',
        'pc_rc_number',
    ];
}
