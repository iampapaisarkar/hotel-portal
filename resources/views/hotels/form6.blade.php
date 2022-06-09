<div class="row">
    <div class="col-12 col-md-6 mb-3">
         <label for="name">Name:</label>
         <input type="text" name="name" value="{{ old('name') }}"
             class="form-control form-control @error('name') is-invalid @enderror" id="name"
             aria-describedby="name" placeholder="Enter phone number">
         @error('name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="rc_number">RC Number:</label>
         <input type="number" name="rc_number" value="{{ old('rc_number') }}"
             class="form-control form-control @error('rc_number') is-invalid @enderror" id="rc_number" aria-describedby="rc_number"
             placeholder="Enter rc number">
         @error('rc_number')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>