<div class="row">
     <div class="col-12 col-md-6 mb-3">
         <label for="name">Name:</label>
         <input type="text" name="h_name" value="{{ old('h_name') }}"
             class="form-control form-control @error('h_name') is-invalid @enderror" id="h_name"
             aria-describedby="h_name" placeholder="Enter full name">
         @error('h_name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="description">Description:</label>
         <input type="text" name="h_description" value="{{ old('h_description') }}"
             class="form-control form-control @error('h_description') is-invalid @enderror" id="h_description"
             aria-describedby="h_description" placeholder="Enter full description">
         @error('h_description')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="country">Country:</label>
         <input type="text" name="h_country" value="{{ old('h_country') }}"
             class="form-control form-control @error('h_country') is-invalid @enderror" id="h_country" aria-describedby="h_country"
             placeholder="Enter country">
         @error('h_country')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="state">State:</label>
         <select name="h_state" id="inputh_State" class="form-control  @error('h_state') is-invalid @enderror">
            <option selected>Select State</option>
            <option>...</option>
        </select>
        @error('h_state')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="city">City:</label>
         <input type="text" name="h_city" value="{{ old('h_city') }}"
             class="form-control form-control @error('h_city') is-invalid @enderror" id="h_city"
             aria-describedby="h_city" placeholder="Enter full city">
         @error('h_city')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="street_name">Street Name:</label>
         <input type="text" name="h_street_name" value="{{ old('h_street_name') }}"
             class="form-control form-control @error('h_street_name') is-invalid @enderror" id="h_street_name"
             aria-describedby="h_street_name" placeholder="Enter full street name">
         @error('h_street_name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="street_number">Street Number:</label>
         <input type="number" name="h_street_number" value="{{ old('h_street_number') }}"
             class="form-control form-control @error('h_street_number') is-invalid @enderror" id="h_street_number"
             aria-describedby="h_street_number" placeholder="Enter full street number">
         @error('h_street_number')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="lga">L.G.A:</label>
         <select name="h_lga" id="inputState" class="form-control  @error('h_lga') is-invalid @enderror">
            <option selected>Select LGA</option>
            <option>...</option>
        </select>
        @error('h_lga')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="zip_code">Zip Code:</label>
         <input type="number" name="h_zip_code" value="{{ old('h_zip_code') }}"
             class="form-control form-control @error('h_zip_code') is-invalid @enderror" id="h_zip_code"
             aria-describedby="h_zip_code" placeholder="Enter full zip code">
         @error('h_zip_code')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>