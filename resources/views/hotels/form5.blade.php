<div class="row">
     <div class="col-12 col-md-6 mb-3">
         <label for="email">Email:</label>
         <input type="email" name="hc_email" value="{{ old('hc_email') }}"
             class="form-control form-control @error('hc_email') is-invalid @enderror" id="hc_email" aria-describedby="hc_email"
             placeholder="Enter email">
         @error('hc_email')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="phone_number">Phone Number:</label>
         <input type="text" name="hc_phone_number" value="{{ old('hc_phone_number') }}"
             class="form-control form-control @error('hc_phone_number') is-invalid @enderror" id="hc_phone_number"
             aria-describedby="hc_phone_number" placeholder="Enter phone number">
         @error('hc_phone_number')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>