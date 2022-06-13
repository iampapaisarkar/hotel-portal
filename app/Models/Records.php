<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type'
    ];

    public function agent() {
        return $this->hasOne(User::class,'id', 'user_id');
    }

    public function uder_details() {
        return $this->hasOne(UserDetails::class,'record_id', 'id');
    }
    public function contact_details() {
        return $this->hasOne(ContactDetails::class,'record_id', 'id');
    }
    public function other_details() {
        return $this->hasOne(OtherDetails::class,'record_id', 'id');
    }
    public function hotel() {
        return $this->hasOne(Hotel::class,'record_id', 'id');
    }
    public function hotel_contact() {
        return $this->hasOne(HotelContact::class,'record_id', 'id');
    }
    public function parent_company() {
        return $this->hasOne(ParentCompany::class,'record_id', 'id');
    }
    public function hotel_category() {
        return $this->hasOne(HotelCategory::class,'record_id', 'id');
    }
    public function hotel_amenities() {
        return $this->hasOne(HotelAmenities::class,'record_id', 'id');
    }
    public function room_type() {
        return $this->hasOne(RoomType::class,'record_id', 'id');
    }
    public function hotel_price() {
        return $this->hasOne(HotelPrice::class,'record_id', 'id');
    }
    public function booking_day() {
        return $this->hasOne(BookingDay::class,'record_id', 'id');
    }


    public function restaurant() {
        return $this->hasOne(Restaurant::class,'record_id', 'id');
    }
    public function restaurant_contact() {
        return $this->hasOne(RestaurantContact::class,'record_id', 'id');
    }
    public function restaurant_category() {
        return $this->hasOne(RestaurantCategory::class,'record_id', 'id');
    }
    public function restaurant_amenities() {
        return $this->hasOne(RestaurantAmenities::class,'record_id', 'id');
    }
    public function restaurant_meals() {
        return $this->hasOne(RestaurantMeals::class,'record_id', 'id');
    }
    public function restaurant_cancalletion() {
        return $this->hasOne(RestaurantCancellation::class,'record_id', 'id');
    }
}
