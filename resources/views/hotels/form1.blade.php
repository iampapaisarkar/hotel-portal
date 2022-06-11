 <div class="row">
     <div class="col-12 col-md-6 mb-3">
         <label for="first_name">First name:</label>
         <input type="text" name="ud_first_name" value="{{ old('ud_first_name') }}"
             class="form-control @error('ud_first_name') is-invalid @enderror" id="ud_first_name"
             aria-describedby="ud_first_name" placeholder="Enter full first name" >
         @error('ud_first_name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="last_name">Last name:</label>
         <input type="text" name="ud_last_name" value="{{ old('ud_last_name') }}"
             class="form-control @error('ud_last_name') is-invalid @enderror" id="ud_last_name"
             aria-describedby="ud_last_name" placeholder="Enter full last name">
         @error('ud_last_name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="email">Email:</label>
         <input type="email" name="ud_email" value="{{ old('ud_email') }}"
             class="form-control @error('ud_email') is-invalid @enderror" id="ud_email" aria-describedby="ud_email"
             placeholder="Enter ud_email">
         @error('ud_email')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="phone_number">Phone Number:</label>
         <input type="text" name="ud_phone_number" value="{{ old('ud_phone_number') }}"
             class="form-control @error('ud_phone_number') is-invalid @enderror" id="ud_phone_number"
             aria-describedby="ud_phone_number" placeholder="Enter phone number">
         @error('ud_phone_number')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="dob">Date of Birth:</label>
         <input type="date" name="ud_dob" value="{{ old('ud_dob') }}"
             class="form-control @error('ud_dob') is-invalid @enderror" id="ud_dob" aria-describedby="ud_dob"
             placeholder="Enter ud_dob">
         @error('ud_dob')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="gender">Gender:</label>
         <div class="form-check">
             <input name="ud_gender" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="male"
                 checked>
             <label class="form-check-label" for="exampleRadios1">
                 Male
             </label>
         </div>
         <div class="form-check">
             <input name="ud_gender" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="female">
             <label class="form-check-label" for="exampleRadios2">
                 Female
             </label>
         </div>
         @error('ud_gender')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="country">Country:</label>
         <input type="text" disabled name="ud_country" value="{{ old('ud_country') ? old('ud_country') : 'Nigeria' }}"
             class="form-control @error('ud_country') is-invalid @enderror" id="country"
             aria-describedby="country" placeholder="Enter country">
         @error('ud_country')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
        @php
        $states = app('App\Http\Service\Info')->states();
        @endphp
         <label for="state">State:</label>
         <select name="ud_state" id="inputud_State" class="form-control  @error('ud_state') is-invalid @enderror">
            <option selected value="" hidden>Select State</option>
            @foreach($states as $state)
            <option>{{$state->name}}</option>
            @endforeach
        </select>
        @error('ud_state')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="city">City:</label>
         <input type="text" name="ud_city" value="{{ old('ud_city') }}"
             class="form-control @error('ud_city') is-invalid @enderror" id="ud_city"
             aria-describedby="ud_city" placeholder="Enter city">
         @error('ud_city')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
        @php
        $lgas = app('App\Http\Service\Info')->lgas();
        @endphp
         <label for="lga">L.G.A:</label>
         <select name="ud_lga" id="inputState" class="form-control  @error('ud_lga') is-invalid @enderror">
            <option selected value="" hidden>Select LGA</option>
            @foreach($lgas as $lga)
            <option>{{$lga->name}}</option>
            @endforeach
        </select>
        @error('ud_lga')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>