<div class="row">
    <div class="col-12 col-md-6">
         <label for="type_of_hotel">Type of Hotel:</label>
         <select name="type_of_hotel" id="inputState" class="form-control  @error('type_of_hotel') is-invalid @enderror">
            <option selected value="">Select Type</option>
            <option>1 Star</option>
            <option>2 Star</option>
            <option>3 Star</option>
            <option>4 Star</option>
            <option>5 Star</option>
        </select>
        @error('type_of_hotel')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="days_of_notice">Days of Notice:</label>
         <select name="days_of_notice" id="inputState" class="form-control  @error('days_of_notice') is-invalid @enderror">
            <option selected value="">Select Days Before</option>
            <option>1 Days Before</option>
            <option>2 Days Before</option>
            <option>3 Days Before</option>
            <option>7 Days Before</option>
        </select>
        @error('days_of_notice')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
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
         <label for="bed_no">Number of Beds:</label>
         <input type="number" name="bed_no" value="{{ old('bed_no') }}"
             class="form-control form-control @error('bed_no') is-invalid @enderror" id="bed_no" aria-describedby="bed_no"
             placeholder="Enter bed no">
         @error('bed_no')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="guest_no">Number of Guest:</label>
         <input type="number" name="guest_no" value="{{ old('guest_no') }}"
             class="form-control form-control @error('guest no') is-invalid @enderror" id="guest_no" aria-describedby="guest_no"
             placeholder="Enter guest no">
         @error('guest_no')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="bathroom_no">Number of Bathrooms:</label>
         <input type="number" name="bathroom_no" value="{{ old('bathroom_no') }}"
             class="form-control form-control @error('bathroom no') is-invalid @enderror" id="bathroom_no" aria-describedby="bathroom_no"
             placeholder="Enter bathroom no">
         @error('bathroom_no')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="room_no">Number of Rooms:</label>
         <input type="number" name="room_no" value="{{ old('room_no') }}"
             class="form-control form-control @error('room_no') is-invalid @enderror" id="room_no" aria-describedby="room_no"
             placeholder="Enter room no">
         @error('room_no')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>