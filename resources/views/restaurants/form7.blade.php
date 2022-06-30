<div class="row">
    <div class="col-12 col-md-6">
         <label for="rcat_type">Type of Restaurant:</label>
         <select name="rcat_type" id="rcat_type" class="form-control  @error('rcat_type') is-invalid @enderror">
            <option>Fine Dining</option>
            <option>Casual Dinner</option>
            <option>Lounges</option>
            <option>Café</option>
            <option>Eatery</option>
            <option>Takeout</option>
            <option>Buffet</option>
        </select>
        @error('rcat_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>

     <div class="col-12 col-md-6">
         <label for="rcat_meals">Meals:</label>
         <select name="rcat_meals" id="rcat_meals" class="form-control  @error('rcat_meals') is-invalid @enderror">
            <option>African</option>
            <option>Spanish</option>
            <option>Intercontinental</option>
            <option>Italian</option>
            <option>Mexican</option>
            <option>Lebanese</option>
            <option>Others</option>
        </select>
        @error('rcat_meals')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
    </div>

    <div class="col-12 col-md-6">
         <label for="rcat_amenities">Amenities:</label>
         <select id="rcat_amenities" name="rcat_amenities" class="form-control w-100  @error('rcat_amenities') is-invalid @enderror">
            <option>Opening times</option>
            <option>Parking</option>
            <option>Indoor dining</option>
            <option>Outdoor dining</option>
            <option>Wi-fi</option>
            <option>TV</option>
        </select>
        @error('rcat_amenities')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>

 <script>
    $(document).ready(function() {
        var $rcat_type = $("#rcat_type");
        $rcat_type.select2({
            multiple: true,
            selectOnClose: false,
            placeholder: "Select Type",
        });

        var $rcat_meals = $("#rcat_meals");
        $rcat_meals.select2({
            multiple: true,
            selectOnClose: false,
            placeholder: "Select Meals",
        });

        var $rcat_amenities = $("#rcat_amenities");
        $rcat_amenities.select2({
            multiple: true,
            selectOnClose: false,
            placeholder: "Select Amenities",
        });
    });
 </script>