<div class="row">
     <div class="col-12 col-md-6 mb-3">
         <label for="email">Email:</label>
         <input type="email" name="rc_email" value="{{ old('rc_email') }}"
             class="form-control form-control @error('rc_email') is-invalid @enderror" id="rc_email" aria-describedby="rc_email"
             placeholder="Enter email">
         @error('rc_email')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="phone_number">Phone Number:</label>
         <input type="text" name="rc_phone_number" value="{{ old('rc_phone_number') }}"
             class="form-control form-control @error('rc_phone_number') is-invalid @enderror" id="rc_phone_number"
             aria-describedby="rc_phone_number" placeholder="Enter phone number">
         @error('rc_phone_number')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>