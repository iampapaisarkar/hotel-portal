<div class="row">
     <div class="col-12 col-md-6 mb-3">
         <label for="name">Name:</label>
         <input type="text" name="cd_name" value="{{ old('cd_name') }}"
             class="form-control form-control @error('cd_name') is-invalid @enderror" id="cd_name"
             aria-describedby="cd_name" placeholder="Enter full name">
         @error('cd_name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="address">Address:</label>
         <input type="text" name="cd_address" value="{{ old('cd_address') }}"
             class="form-control form-control @error('cd_address') is-invalid @enderror" id="cd_address"
             aria-describedby="cd_address" placeholder="Enter full address">
         @error('cd_address')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="email">Email:</label>
         <input type="email" name="cd_email" value="{{ old('cd_email') }}"
             class="form-control form-control @error('cd_email') is-invalid @enderror" id="cd_email" aria-describedby="cd_email"
             placeholder="Enter email">
         @error('cd_email')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="phone_number">Phone Number:</label>
         <input type="text" name="cd_phone_number" value="{{ old('cd_phone_number') }}"
             class="form-control form-control @error('cd_phone_number') is-invalid @enderror" id="cd_phone_number"
             aria-describedby="cd_phone_number" placeholder="Enter phone number">
         @error('cd_phone_number')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>