<div class="row">
    <div class="col-12 col-md-6">
         <label for="ha_amenities">Amenities:</label>
         <select id="ha_amenities" name="ha_amenities" class="form-control w-100  @error('ha_amenities') is-invalid @enderror">
            <option>Parking</option>
            <option>Free Wi-Fi</option>
            <option>Room Service</option>
            <option>24-Hour Guest Reception</option>
            <option>Complimentary Toiletries</option>
            <option>Healthy Breakfast</option>
            <option>Ample Wall Outlets</option>
            <option>Hair Styling Tools</option>
            <option>Flexible Checkout</option>
            <option>Pool</option>
            <option>Mini fridge</option>
            <option>Complimentary Electronics Chargers</option>
            <option>Clothing Iron</option>
            <option>Business Facilities</option>
            <option>Transportation Information</option>
            <option>Free Breakfast</option>
            <option>Laundry Services</option>
            <option>Spa & Wellness Amenities</option>
            <option>Exercise Facilities and Accessories</option>
            <option>Daily Newspaper</option>
            <option>Entertainment</option>
            <option>Complimentary Luggage storage</option>
            <option>Cribs & Cots for Children</option>
            <option>Curated Experiences</option>
            <option>Custom Offers</option>
            <option>Fancy Bathrobes</option>
            <option>Kid-friendly Rooms and Products</option>
            <option>Premium Bedding</option>
            <option>Stain Remover Wipes</option>
            <option>Pet-friendly Rooms</option>
            <option>Champagne Bar</option>
            <option>Smoking</option>
            <option>Non-smoking</option>
            <option>Partying</option>
            <option>No Partying</option>
        </select>
        @error('ha_amenities')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="ha_room_type">Room Type:</label>
         <select name="ha_room_type" id="ha_room_type" class="form-control  @error('ha_room_type') is-invalid @enderror">
            <option>Standard Single</option>
            <option>Standard Double</option>
            <option>Hotel-Apartments</option>
            <option>King or Queen Room</option>
            <option>Executive Suite</option>
            <option>Family Suite</option>
            <option>Penthouse</option>
            <option>Presidential Suite</option>
            <option>Twin-Room</option>
        </select>
        @error('ha_room_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="ha_room_type_amenities">Room Type Amenities:</label>
         <select name="ha_room_type_amenities" id="ha_room_type_amenities" class="form-control  @error('ha_room_type_amenities') is-invalid @enderror">
            <option>Free Wi-Fi</option>
            <option>Room Service</option>
            <option>24-Hour Guest Reception</option>
            <option>Complimentary Toiletries</option>
            <option>Complimentary Breakfast</option>
            <option>Ample Wall Outlets</option>
            <option>Hair Styling Tools</option>
            <option>Mini fridge</option>
            <option>Complimentary Electronics Chargers</option>
            <option>Clothing Iron</option>
            <option>Daily Newspaper</option>
            <option>Entertainment</option>
            <option>Complimentary Luggage storage</option>
            <option>Cribs & Cots for Children/Fancy Bathrobes</option>
            <option>Kid-friendly Rooms and Products</option>
            <option>Premium Bedding</option>
            <option>Stain Remover Wipes</option>
            <option>Pet-friendly Rooms</option>
            <option>Champagne Bar</option>
            <option>Smoking</option>
            <option>Non-smoking</option>
            <option>Partying</option>
            <option>No Partying</option>
            <option>Standard</option>
            <option>Standard</option>
            <option>Standard</option>
            <option>Standard</option>
        </select>
        @error('ha_room_type_amenities')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>

 <script>
    $(document).ready(function() {
        var $disabledResults = $("#ha_amenities");
        $disabledResults.select2({
            multiple: true,
            selectOnClose: false,
            placeholder: "Select Amenities",
        });
        var $disabledResults = $("#ha_room_type");
        $disabledResults.select2({
            multiple: true,
            selectOnClose: false,
            placeholder: "Select Room Type",
        });
        var $disabledResults = $("#ha_room_type_amenities");
        $disabledResults.select2({
            multiple: true,
            selectOnClose: false,
            placeholder: "Select Room Type Amenities",
        });
    });
 </script>

 <style>
    .select2{
        width: 100%!important;
    }
 </style>