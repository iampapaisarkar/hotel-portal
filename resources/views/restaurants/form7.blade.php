<div class="row">
    <div class="col-12 col-md-6">
         <label for="rcat_type">Type of Restaurant:</label>
         <select name="rcat_type" id="inputState" class="form-control  @error('rcat_type') is-invalid @enderror">
            <option selected value="">Select Type</option>
            <option>Fine Dining</option>
            <option>Casual Dinner</option>
            <option>Lounges</option>
            <option>Café</option>
            <option>Eatery</option>
            <option>Takeout</option>
            <option>Buffet</option>
        </select>
        @error('rcat_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>