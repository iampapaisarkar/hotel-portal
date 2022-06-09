 <div class="row">
     <div class="col-12 col-md-6 mb-3">
         <label for="username">Username:</label>
         <input type="text" name="username" value="{{ old('username') }}"
             class="form-control form-control @error('username') is-invalid @enderror" id="username"
             aria-describedby="username" placeholder="Enter full username">
         @error('username')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="first_name">First name:</label>
         <input type="text" name="first_name" value="{{ old('first_name') }}"
             class="form-control form-control @error('first_name') is-invalid @enderror" id="first_name"
             aria-describedby="first_name" placeholder="Enter full first name">
         @error('first_name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="last_name">Last name:</label>
         <input type="text" name="last_name" value="{{ old('last_name') }}"
             class="form-control form-control @error('last_name') is-invalid @enderror" id="last_name"
             aria-describedby="last_name" placeholder="Enter full last name">
         @error('last_name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
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
     <div class="col-12 col-md-6 mb-3">
         <label for="dob">Date of Birth:</label>
         <input type="date" name="dob" value="{{ old('dob') }}"
             class="form-control form-control @error('dob') is-invalid @enderror" id="dob" aria-describedby="dob"
             placeholder="Enter dob">
         @error('dob')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="gender">Gender:</label>
         <div class="form-check">
             <input name="gender" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="male"
                 checked>
             <label class="form-check-label" for="exampleRadios1">
                 Male
             </label>
         </div>
         <div class="form-check">
             <input name="gender" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="female">
             <label class="form-check-label" for="exampleRadios2">
                 Female
             </label>
         </div>
         @error('referral_code')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="country">Country:</label>
         <input type="text" disabled name="country" value="{{ old('city') ? old('city') : 'Nigeria' }}"
             class="form-control form-control @error('country') is-invalid @enderror" id="country"
             aria-describedby="country" placeholder="Enter country">
         @error('country')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="state">State:</label>
         <select name="state" id="inputState" class="form-control  @error('state') is-invalid @enderror">
            <option selected>Select State</option>
            <option>...</option>
        </select>
        @error('state')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="city">City:</label>
         <input type="text" name="city" value="{{ old('city') }}"
             class="form-control form-control @error('city') is-invalid @enderror" id="city"
             aria-describedby="city" placeholder="Enter city">
         @error('city')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="lga">L.G.A:</label>
         <select name="lga" id="inputState" class="form-control  @error('lga') is-invalid @enderror">
            <option selected>Select LGA</option>
            <option>...</option>
        </select>
        @error('lga')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>