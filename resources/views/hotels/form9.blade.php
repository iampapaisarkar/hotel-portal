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
         <label for="front_view">Front View of Hotel:</label>
         <input type="file" name="front_view" value="{{ old('front_view') }}"
             class="form-control form-control @error('front_view') is-invalid @enderror" id="front_view"
             aria-describedby="front_view" placeholder="Enter phone number">
         @error('front_view')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="bathroom_view">Bathroom Pictures:</label>
         <input type="file" name="bathroom_view" value="{{ old('bathroom_view') }}"
             class="form-control form-control @error('bathroom_view') is-invalid @enderror" id="bathroom_view"
             aria-describedby="bathroom_view" placeholder="Enter phone number">
         @error('bathroom_view')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="room_picture">Room pictures:</label>
         <input type="file" name="room_picture" value="{{ old('room_picture') }}"
             class="form-control form-control @error('room_picture') is-invalid @enderror" id="room_picture"
             aria-describedby="room_picture" placeholder="Enter phone number">
         @error('room_picture')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>