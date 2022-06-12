<div class="row">
     <div class="col-12 col-md-6 mb-3">
         <label for="name">Name:</label>
         <input type="text" name="r_name" value="{{ old('r_name') }}"
             class="form-control form-control @error('r_name') is-invalid @enderror" id="r_name"
             aria-describedby="r_name" placeholder="Enter full name">
         @error('r_name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="description">Description:</label>
         <input type="text" name="r_description" value="{{ old('r_description') }}"
             class="form-control form-control @error('r_description') is-invalid @enderror" id="r_description"
             aria-describedby="r_description" placeholder="Enter full description">
         @error('r_description')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="country">Country:</label>
         <input type="text" name="r_country" value="{{ old('r_country') }}"
             class="form-control form-control @error('r_country') is-invalid @enderror" id="r_country" aria-describedby="r_country"
             placeholder="Enter country">
         @error('r_country')
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
         <select name="r_state" id="inputr_State" class="form-control  @error('r_state') is-invalid @enderror">
            <option selected value="" hidden>Select State</option>
            @foreach($states as $state)
            <option>{{$state->name}}</option>
            @endforeach
        </select>
        @error('r_state')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="city">City:</label>
         <input type="text" name="r_city" value="{{ old('r_city') }}"
             class="form-control form-control @error('r_city') is-invalid @enderror" id="r_city"
             aria-describedby="r_city" placeholder="Enter full city">
         @error('r_city')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="street_name">Street Name:</label>
         <input type="text" name="r_street_name" value="{{ old('r_street_name') }}"
             class="form-control form-control @error('r_street_name') is-invalid @enderror" id="r_street_name"
             aria-describedby="r_street_name" placeholder="Enter full street name">
         @error('r_street_name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="street_number">Street Number:</label>
         <input type="number" name="r_street_number" value="{{ old('r_street_number') }}"
             class="form-control form-control @error('r_street_number') is-invalid @enderror" id="r_street_number"
             aria-describedby="r_street_number" placeholder="Enter full street number">
         @error('r_street_number')
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
         <select name="r_lga" id="inputLga" disabled class="form-control  @error('r_lga') is-invalid @enderror">
            <option selected value="" hidden>Select LGA</option>
            @foreach($lgas as $lga)
            <option>{{$lga->name}}</option>
            @endforeach
        </select>
        @error('r_lga')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="zip_code">Zip Code:</label>
         <input type="number" name="r_zip_code" value="{{ old('r_zip_code') }}"
             class="form-control form-control @error('r_zip_code') is-invalid @enderror" id="r_zip_code"
             aria-describedby="r_zip_code" placeholder="Enter full zip code">
         @error('r_zip_code')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>


 <script>
    $('#inputr_State').on('change', function() {
        var value = this.value;
        if (value && value.length != null) {
            $('#inputLga').removeAttr('disabled');
            var lgas = <?php if(isset($lgas)){echo $lgas;} ?>;
            var optionsHTML = '<option selected value="">Select LGA</option>';
            lgas.forEach(lga => {
                if (lga.state.name == value) {
                    optionsHTML += '<option value="' + lga.id + '">' + lga.name + '</option>'
                }
            });
            $('#inputLga').html(optionsHTML);
        } else {
            $('#inputLga').html('<option selected value="">Select LGA</option>');
            $('#inputLga').attr('disabled');
        }
    });
 </script>