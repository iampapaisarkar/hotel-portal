<div class="row">
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