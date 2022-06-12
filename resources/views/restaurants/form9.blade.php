<div class="row">
    <div class="col-12 col-md-6">
         <label for="rm_restaurant_type">Type of Restaurant:</label>
         <select name="rm_restaurant_type" id="rm_restaurant_type" class="form-control  @error('rm_restaurant_type') is-invalid @enderror">
            <option selected value="">Select Type</option>
            <option>Fine Dining</option>
            <option>Casual Dinner</option>
            <option>Lounges</option>
            <option>Café</option>
            <option>Eatery</option>
            <option>Takeout</option>
            <option>Buffet</option>
        </select>
        @error('rm_restaurant_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
    </div>

    <div class="col-12 col-md-6">
         <label for="rm_meals">Meals:</label>
         <select name="rm_meals" id="rm_meals" class="form-control  @error('rm_meals') is-invalid @enderror">
            <option selected value="">Select Melas</option>
            <option>African</option>
            <option>Spanish</option>
            <option>Intercontinental</option>
            <option>Italian</option>
            <option>Mexican</option>
            <option>Lebanese</option>
            <option>Others</option>
        </select>
        @error('rm_meals')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
    </div>

    <div class="col-12 col-md-6 mb-3">
         <label for="rm_price">Prices:</label>
         <input type="number" name="rm_price" value="{{ old('rm_price') }}"
             class="form-control form-control @error('rm_price') is-invalid @enderror" id="rm_price"
             aria-describedby="rm_price" placeholder="Enter price">
         @error('rm_price')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="rm_images">Images:</label>
         <input type="file" name="rm_images" value="{{ old('rm_images') }}"
             class="form-control form-control @error('rm_images') is-invalid @enderror" id="rm_images"
             aria-describedby="rm_images" >
         @error('rm_images')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>