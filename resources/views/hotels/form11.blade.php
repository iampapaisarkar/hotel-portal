<div class="row">
    <div class="col-12 col-md-6 mb-3">
         <label for="min_booking_day">Minimum Booking Days:</label>
         <input type="date" name="bday_min_booking_day" value="{{ old('bday_min_booking_day') }}"
             class="form-control form-control @error('bday_min_booking_day') is-invalid @enderror" id="bday_min_booking_day"
             aria-describedby="bday_min_booking_day" placeholder="Enter phone number">
         @error('bday_min_booking_day')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="max_booking_day">Maximum Booking Days:</label>
         <input type="date" name="bday_max_booking_day" value="{{ old('bday_max_booking_day') }}"
             class="form-control form-control @error('bday_max_booking_day') is-invalid @enderror" id="bday_max_booking_day"
             aria-describedby="bday_max_booking_day" placeholder="Enter phone number">
         @error('bday_max_booking_day')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="checkin_time">Checking Time:</label>
         <input type="time" name="bday_checkin_time" value="{{ old('bday_checkin_time') }}"
             class="form-control form-control @error('bday_checkin_time') is-invalid @enderror" id="bday_checkin_time"
             aria-describedby="bday_checkin_time" placeholder="Enter phone number">
         @error('bday_checkin_time')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="checkout_time">Check Out Time:</label>
         <input type="time" name="bday_checkout_time" value="{{ old('bday_checkout_time') }}"
             class="form-control form-control @error('bday_checkout_time') is-invalid @enderror" id="bday_checkout_time"
             aria-describedby="bday_checkout_time" placeholder="Enter phone number">
         @error('bday_checkout_time')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="bday_cancellation_type">Cancellation Type:</label>
         <select name="bday_cancellation_type" id="inputState" class="form-control  @error('bday_cancellation_type') is-invalid @enderror">
            <option selected value="">Select Cancellation type</option>
            <option>Paid</option>
            <option>Free Cancellation</option>
        </select>
        @error('bday_cancellation_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>