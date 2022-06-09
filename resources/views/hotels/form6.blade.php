<div class="row">
    <div class="col-12 col-md-6 mb-3">
         <label for="name">Name:</label>
         <input type="text" name="pc_name" value="{{ old('pc_name') }}"
             class="form-control form-control @error('pc_name') is-invalid @enderror" id="pc_name"
             aria-describedby="pc_name" placeholder="Enter name">
         @error('pc_name')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="rc_number">RC Number:</label>
         <input type="number" name="pc_rc_number" value="{{ old('pc_rc_number') }}"
             class="form-control form-control @error('pc_rc_number') is-invalid @enderror" id="pc_rc_number" aria-describedby="pc_rc_number"
             placeholder="Enter rc number">
         @error('pc_rc_number')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>