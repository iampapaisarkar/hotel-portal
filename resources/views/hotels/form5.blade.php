<div class="row">
     <div class="col-12 col-md-6 mb-3">
         <label for="email">Email:</label>
         <input type="email" name="email" value="{{ old('email') }}"
             class="form-control form-control @error('email') is-invalid @enderror" id="email" aria-describedby="email"
             placeholder="Enter email">
         @error('email')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="phone_number">Phone Number:</label>
         <input type="text" name="phone_number" value="{{ old('phone_number') }}"
             class="form-control form-control @error('phone_number') is-invalid @enderror" id="phone_number"
             aria-describedby="phone_number" placeholder="Enter phone number">
         @error('phone_number')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>