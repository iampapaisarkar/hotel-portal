<div class="row">
     <div class="col-12 col-md-6 mb-3">
         <label for="name">Name:</label>
         <input type="text" name="name" value="{{ old('name') }}"
             class="form-control form-control @error('name') is-invalid @enderror" id="name"
             aria-describedby="name" placeholder="Enter full name">
         @error('name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="description">Description:</label>
         <input type="text" name="description" value="{{ old('description') }}"
             class="form-control form-control @error('description') is-invalid @enderror" id="description"
             aria-describedby="description" placeholder="Enter full description">
         @error('description')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="country">Country:</label>
         <input type="text" name="country" value="{{ old('country') }}"
             class="form-control form-control @error('country') is-invalid @enderror" id="country" aria-describedby="country"
             placeholder="Enter country">
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
             aria-describedby="city" placeholder="Enter full city">
         @error('city')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="street_name">Street Name:</label>
         <input type="text" name="street_name" value="{{ old('street_name') }}"
             class="form-control form-control @error('street_name') is-invalid @enderror" id="street_name"
             aria-describedby="street_name" placeholder="Enter full street name">
         @error('street_name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="street_number">Street Number:</label>
         <input type="number" name="street_number" value="{{ old('street_number') }}"
             class="form-control form-control @error('street_number') is-invalid @enderror" id="street_number"
             aria-describedby="street_number" placeholder="Enter full street number">
         @error('street_number')
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
     <div class="col-12 col-md-6 mb-3">
         <label for="zip_code">Zip Code:</label>
         <input type="number" name="zip_code" value="{{ old('zip_code') }}"
             class="form-control form-control @error('zip_code') is-invalid @enderror" id="zip_code"
             aria-describedby="zip_code" placeholder="Enter full zip code">
         @error('zip_code')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>