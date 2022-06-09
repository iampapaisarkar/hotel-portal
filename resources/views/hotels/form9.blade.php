<div class="row">
    <div class="col-12 col-md-6">
         <label for="room_type">Room Type:</label>
         <select name="rt_room_type" id="inputState" class="form-control  @error('rt_room_type') is-invalid @enderror">
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
        @error('rt_room_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
    <div class="col-12 col-md-6 mb-3">
         <label for="front_view">Front View of Hotel:</label>
         <input type="file" name="rt_front_view" value="{{ old('rt_front_view') }}"
             class="form-control form-control @error('rt_front_view') is-invalid @enderror" id="rt_front_view"
             aria-describedby="rt_front_view" placeholder="Enter phone number">
         @error('rt_front_view')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="bathroom_view">Bathroom Pictures:</label>
         <input type="file" name="rt_bathroom_view" value="{{ old('rt_bathroom_view') }}"
             class="form-control form-control @error('rt_bathroom_view') is-invalid @enderror" id="rt_bathroom_view"
             aria-describedby="rt_bathroom_view" placeholder="Enter phone number">
         @error('rt_bathroom_view')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="room_picture">Room pictures:</label>
         <input type="file" name="rt_room_picture" value="{{ old('rt_room_picture') }}"
             class="form-control form-control @error('rt_room_picture') is-invalid @enderror" id="rt_room_picture"
             aria-describedby="rt_room_picture" placeholder="Enter phone number">
         @error('rt_room_picture')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>