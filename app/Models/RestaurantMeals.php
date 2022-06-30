<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantMeals extends Model
{
    use HasFactory;

    protected $fillable = [
        'record_id',
        'rm_restaurant_type',
        'rm_name',
        'rm_price',
        'rm_images',
    ];
}
