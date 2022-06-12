<div class="row">
    <div class="col-12 col-md-6">
         <label for="ra_amenities">Amenities:</label>
         <select id="ra_amenities" name="ra_amenities" class="form-control w-100  @error('ra_amenities') is-invalid @enderror">
            <option selected value="">Select Amenities</option>
            <option>Opening times</option>
            <option>Parking</option>
            <option>Indoor dining</option>
            <option>Outdoor dining</option>
            <option>Wi-fi</option>
            <option>TV</option>
        </select>
        @error('ra_amenities')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="ra_type">Type of Restaurant:</label>
         <select name="ra_type" id="ra_type" class="form-control  @error('ra_type') is-invalid @enderror">
            <option selected value="">Select Type</option>
            <option>Fine Dining</option>
            <option>Casual Dinner</option>
            <option>Lounges</option>
            <option>Café</option>
            <option>Eatery</option>
            <option>Takeout</option>
            <option>Buffet</option>
        </select>
        @error('ra_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>

 <script>
 </script>

 <style>
    .select2{
        width: 100%!important;
    }
 </style>