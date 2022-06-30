<div class="row">
    <div class="col-12 col-md-6 mb-3">
         <label for="corporate_price">Base Price:</label>
         <input type="number" name="hp_base_price" value="{{ old('hp_base_price') }}"
             class="form-control form-control @error('hp_base_price') is-invalid @enderror" id="hp_base_price"
             aria-describedby="hp_base_price" placeholder="Enter corporate price">
         @error('hp_base_price')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="hp_discount_rate">Discount Rate (%):</label>
         <select name="hp_discount_rate" id="inputState" class="form-control  @error('hp_discount_rate') is-invalid @enderror">
            <option selected value="">Select Rate</option>
            <option>0</option>
            <option>5</option>
            <option>10</option>
            <option>15</option>
            <option>20</option>
            <option>25</option>
            <option>30</option>
            <option>35</option>
            <option>40</option>
            <option>45</option>
            <option>50</option>
        </select>
        @error('hp_discount_rate')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="discount_rate">Discount Price:</label>
         <input readonly type="number" name="hp_discount_price" value="{{ old('hp_discount_price') }}"
             class="form-control form-control @error('hp_discount_price') is-invalid @enderror" id="hp_discount_price"
             aria-describedby="hp_discount_price" placeholder="Enter discount rate">
         @error('hp_discount_price')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>