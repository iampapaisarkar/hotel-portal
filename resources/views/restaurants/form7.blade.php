<div class="row">
    <div class="col-12 col-md-6">
         <label for="hcat_type_of_hotel">Type of Hotel:</label>
         <select name="hcat_type_of_hotel" id="inputState" class="form-control  @error('hcat_type_of_hotel') is-invalid @enderror">
            <option selected value="">Select Type</option>
            <option>1 Star</option>
            <option>2 Star</option>
            <option>3 Star</option>
            <option>4 Star</option>
            <option>5 Star</option>
        </select>
        @error('hcat_type_of_hotel')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="hcat_days_of_notice">Days of Notice:</label>
         <select name="hcat_days_of_notice" id="inputState" class="form-control  @error('hcat_days_of_notice') is-invalid @enderror">
            <option selected value="">Select Days Before</option>
            <option>1 Days Before</option>
            <option>2 Days Before</option>
            <option>3 Days Before</option>
            <option>7 Days Before</option>
        </select>
        @error('hcat_days_of_notice')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="hcat_room_type">Room Type:</label>
         <select name="hcat_room_type" id="inputState" class="form-control  @error('hcat_room_type') is-invalid @enderror">
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
        @error('hcat_room_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="hcat_bed_no">Number of Beds:</label>
         <input type="number" name="hcat_bed_no" value="{{ old('hcat_bed_no') }}"
             class="form-control form-control @error('hcat_bed_no') is-invalid @enderror" id="hcat_bed_no" aria-describedby="hcat_bed_no"
             placeholder="Enter bed no">
         @error('hcat_bed_no')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="hcat_guest_no">Number of Guest:</label>
         <input type="number" name="hcat_guest_no" value="{{ old('hcat_guest_no') }}"
             class="form-control form-control @error('guest no') is-invalid @enderror" id="hcat_guest_no" aria-describedby="hcat_guest_no"
             placeholder="Enter guest no">
         @error('hcat_guest_no')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="hcat_bathroom_no">Number of Bathrooms:</label>
         <input type="number" name="hcat_bathroom_no" value="{{ old('hcat_bathroom_no') }}"
             class="form-control form-control @error('bathroom no') is-invalid @enderror" id="hcat_bathroom_no" aria-describedby="hcat_bathroom_no"
             placeholder="Enter bathroom no">
         @error('hcat_bathroom_no')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="hcat_room_no">Number of Rooms:</label>
         <input type="number" name="hcat_room_no" value="{{ old('hcat_room_no') }}"
             class="form-control form-control @error('hcat_room_no') is-invalid @enderror" id="hcat_room_no" aria-describedby="hcat_room_no"
             placeholder="Enter room no">
         @error('hcat_room_no')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>