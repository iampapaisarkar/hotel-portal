<div class="row">
    <div class="col-12 col-md-6">
         <label for="room_type">Room Type:</label>
         <select name="room_type" id="inputState" class="form-control  @error('room_type') is-invalid @enderror">
            <option selected value="">Select Room Type</option>
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
        @error('room_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
    <div class="col-12 col-md-6 mb-3">
         <label for="corporate_price">Corporate Price:</label>
         <input type="number" name="corporate_price" value="{{ old('corporate_price') }}"
             class="form-control form-control @error('corporate_price') is-invalid @enderror" id="corporate_price"
             aria-describedby="corporate_price" placeholder="Enter corporate price">
         @error('corporate_price')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="discount_rate">Discount Rate (%):</label>
         <input type="number" name="discount_rate" value="{{ old('discount_rate') }}"
             class="form-control form-control @error('discount_rate') is-invalid @enderror" id="discount_rate"
             aria-describedby="discount_rate" placeholder="Enter discount rate">
         @error('discount_rate')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>