<div class="row">
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

     <div class="col-12 col-md-6 mb-3">
         <label for="ha_room_type_no">Number of Room Type in Hotel:</label>
         <input type="number" name="ha_room_type_no" value="{{ old('ha_room_type_no') }}"
             class="form-control form-control @error('ha_room_type_no') is-invalid @enderror" id="ha_room_type_no" aria-describedby="ha_room_type_no"
             placeholder="Enter room no">
         @error('ha_room_type_no')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>

     <div class="col-12 col-md-6 mb-3">
         <label for="ha_bed_no">Number of Beds:</label>
         <input type="number" name="ha_bed_no" value="{{ old('ha_bed_no') }}"
             class="form-control form-control @error('ha_bed_no') is-invalid @enderror" id="ha_bed_no" aria-describedby="ha_bed_no"
             placeholder="Enter bed no">
         @error('ha_bed_no')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="ha_guest_no">Number of Guest:</label>
         <input type="number" name="ha_guest_no" value="{{ old('ha_guest_no') }}"
             class="form-control form-control @error('guest no') is-invalid @enderror" id="ha_guest_no" aria-describedby="ha_guest_no"
             placeholder="Enter guest no">
         @error('ha_guest_no')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="ha_bathroom_no">Number of Bathrooms:</label>
         <input type="number" name="ha_bathroom_no" value="{{ old('ha_bathroom_no') }}"
             class="form-control form-control @error('bathroom no') is-invalid @enderror" id="ha_bathroom_no" aria-describedby="ha_bathroom_no"
             placeholder="Enter bathroom no">
         @error('ha_bathroom_no')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>

 <script>
    $(document).ready(function() {
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