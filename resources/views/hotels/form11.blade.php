<div class="row">
    <div class="col-12 col-md-6 mb-3">
         <label for="min_booking_day">Minimum Booking Days:</label>
         <input type="date" name="min_booking_day" value="{{ old('min_booking_day') }}"
             class="form-control form-control @error('min_booking_day') is-invalid @enderror" id="min_booking_day"
             aria-describedby="min_booking_day" placeholder="Enter phone number">
         @error('min_booking_day')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="max_booking_day">Maximum Booking Days:</label>
         <input type="date" name="max_booking_day" value="{{ old('max_booking_day') }}"
             class="form-control form-control @error('max_booking_day') is-invalid @enderror" id="max_booking_day"
             aria-describedby="max_booking_day" placeholder="Enter phone number">
         @error('max_booking_day')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="checkin_time">Checking Time:</label>
         <input type="time" name="checkin_time" value="{{ old('checkin_time') }}"
             class="form-control form-control @error('checkin_time') is-invalid @enderror" id="checkin_time"
             aria-describedby="checkin_time" placeholder="Enter phone number">
         @error('checkin_time')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="checkout_time">Check Out Time:</label>
         <input type="time" name="checkout_time" value="{{ old('checkout_time') }}"
             class="form-control form-control @error('checkout_time') is-invalid @enderror" id="checkout_time"
             aria-describedby="checkout_time" placeholder="Enter phone number">
         @error('checkout_time')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="cancellation_type">Cancellation Type:</label>
         <select name="cancellation_type" id="inputState" class="form-control  @error('cancellation_type') is-invalid @enderror">
            <option selected value="">Select Cancellation type</option>
            <option>Paid</option>
            <option>Free Cancellation</option>
        </select>
        @error('cancellation_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>