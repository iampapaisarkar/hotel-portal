<div class="row">
    <div class="col-12 col-md-6">
         <label for="rc_type">Cancellation Type:</label>
         <select name="rc_type" id="rc_type" class="form-control  @error('rc_type') is-invalid @enderror">
            <option>Free</option>
            <option>Paid</option>
        </select>
        @error('rc_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
</div>