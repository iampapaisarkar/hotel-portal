<div class="row">
     <div class="col-12 col-md-6 mb-3">
         <label for="od_ac_number">Payment Account Number:</label>
         <input type="text" name="od_ac_number" value="{{ old('od_ac_number') }}"
             class="form-control form-control @error('od_ac_number') is-invalid @enderror" id="od_ac_number"
             aria-describedby="od_ac_number" placeholder="Enter account number">
         @error('od_ac_number')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="od_name_of_bank">Name of Bank:</label>
         <input type="text" name="od_name_of_bank" value="{{ old('od_name_of_bank') }}"
             class="form-control form-control @error('od_name_of_bank') is-invalid @enderror" id="od_name_of_bank"
             aria-describedby="od_name_of_bank" placeholder="Enter name of bank">
         @error('od_name_of_bank')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="od_id_type">Identification Type:</label>
         <select name="od_id_type" id="inputState" class="form-control  @error('od_id_type') is-invalid @enderror">
            <option selected value="">Select Identification Type</option>
            <option>Drivers License</option>
            <option>International Passport</option>
            <option>Voters Card</option>
            <option>NIN</option>
        </select>
         @error('od_id_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="od_id_document">Upload Identity Document:</label>
         <input type="file" name="od_id_document" value="{{ old('od_id_document') }}"
             class="form-control form-control @error('od_id_document') is-invalid @enderror" id="od_id_document"
             aria-describedby="od_id_document" >
         @error('od_id_document')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="od_id_number">Identification Number:</label>
         <input type="text" name="od_id_number" value="{{ old('od_id_number') }}"
             class="form-control form-control @error('od_id_number') is-invalid @enderror" id="od_id_number"
             aria-describedby="od_id_number" placeholder="Enter identification number">
         @error('od_id_number')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>