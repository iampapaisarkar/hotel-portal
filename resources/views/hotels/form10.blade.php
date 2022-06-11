<div class="row">
    <div class="col-12 col-md-6">
         <label for="room_type">Room Type:</label>
         <select name="hp_room_type" id="hp_room_type" class="form-control  @error('hp_room_type') is-invalid @enderror">
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
        @error('hp_room_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
    <div class="col-12 col-md-6 mb-3">
         <label for="corporate_price">Corporate Price:</label>
         <input type="number" name="hp_corporate_price" value="{{ old('hp_corporate_price') }}"
             class="form-control form-control @error('hp_corporate_price') is-invalid @enderror" id="hp_corporate_price"
             aria-describedby="hp_corporate_price" placeholder="Enter corporate price">
         @error('hp_corporate_price')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="discount_rate">Discount Rate (%):</label>
         <input type="number" name="hp_discount_rate" value="{{ old('hp_discount_rate') }}"
             class="form-control form-control @error('hp_discount_rate') is-invalid @enderror" id="hp_discount_rate"
             aria-describedby="hp_discount_rate" placeholder="Enter discount rate">
         @error('hp_discount_rate')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>


 <script>
        $(document).ready(function() {
            var $disabledResults = $("#hp_room_type");
            $disabledResults.select2({
                multiple: true,
                selectOnClose: false,
                placeholder: "Select Room Type",
            });
        });
 </script>