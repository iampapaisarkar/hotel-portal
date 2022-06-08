@extends('layouts.app')
@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Agents</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Agent Lists</h6>
                </div>
                <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-end">
                    <a href="#" class="btn btn-primary" type="button" data-toggle="modal" data-target="#CreateFormModal">Add Agent</a>
                </div>
            </div>
        </div>
        {{env('APP_NAME')}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Referral Code</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Referral Code</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phone_number}}</td>
                            <td>{{$user->referral_code ? $user->referral_code : '-'}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Create Form Modal-->
    <div class="modal fade" id="CreateFormModal" tabindex="-1" role="dialog" aria-labelledby="CreateFormModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form class="user" id="createForm">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateFormModalLabel">Create New Agent</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <label for="name">Full name:</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control form-control @error('name') is-invalid @enderror"
                                id="name" aria-describedby="name"
                                placeholder="Enter full name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label for="email">Email:</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control @error('email') is-invalid @enderror"
                                id="email" aria-describedby="email"
                                placeholder="Enter email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label for="phone_number">Phone Number:</label>
                            <input type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control form-control @error('phone_number') is-invalid @enderror"
                                id="phone_number" aria-describedby="phone_number"
                                placeholder="Enter phone number">
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 mb-3">
                            <label for="password">Password:</label>
                            <input type="text" name="password" value="{{ old('password') }}" class="form-control form-control @error('password') is-invalid @enderror"
                                id="password" aria-describedby="password"
                                placeholder="Enter password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="referral_code">Referral Code:</label>
                            <input type="text" name="referral_code" value="{{ old('referral_code') }}" class="form-control form-control @error('referral_code') is-invalid @enderror"
                                id="referral_code" aria-describedby="referral_code"
                                placeholder="Enter referral code" />
                            @error('referral_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button id="createSubmit" class="btn btn-primary" type="submit" >Submit 
                    <div id="createFormLoader" style="width: 15px;height: 15px;" class="d-none spinner-border text-light ml-2" role="status"></div></button>
                </div>
            </div>
            </form>
        </div>
    </div>

<script>
    $(document).ready(function() {
        var $form = $("#createForm");
        $form.validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true,
                },
                phone_number: "required",
                password: "required",
            },
            submitHandler: function(form) {
                var formData = new FormData(form);

                $("#createFormLoader").removeClass('d-none');
                $("#createSubmit").attr('disabled', true);
                $.ajax({
                    url: "<?php echo asset('') ?>"+"agents",
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    type: 'POST',
                    data: formData,
                    dataType: "json",
                    success: function(response) {
                        $("#createFormLoader").addClass('d-none');
                        $("#createSubmit").attr('disabled', false);

                        $('#CreateFormModal').modal('hide')

                        setTimeout(function() {
                            toastr['success'](
                                response, {
                                    closeButton: true,
                                    tapToDismiss: false
                                }
                            );
                        }, 1000);

                    },
                    error: function(errors){

                        if(errors.status == 422){
                            var errorMessages = errors.responseJSON.errors
                            var validator = $( "#createForm" ).validate();
                            validator.showErrors(errorMessages);
                        }

                        $("#createFormLoader").addClass('d-none');
                        $("#createSubmit").attr('disabled', false);

                        setTimeout(function() {
                            toastr['error'](
                                errors.responseJSON.message, {
                                    closeButton: true,
                                    tapToDismiss: false
                                }
                            );
                        }, 1000);

                    },
                    cache: false,
                    contentType: false,
                    processData: false
                });
                return false;
            }
        });
    });
</script>
@endsection