<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'state_id', 'name'
    ];

    public function state() {
        return $this->hasOne(State::class,'id', 'state_id');
    }
}
