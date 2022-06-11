@extends('layouts.app')
@section('content')

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Hotels</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 d-flex align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Hotel Lists</h6>
                </div>
                <div class="col-12 col-md-6 col-lg-6 d-flex justify-content-end">
                    <a href="#" class="btn btn-primary" type="button" data-toggle="modal" data-target="#CreateFormModal">Add Hotel</a>
                </div>
            </div>
        </div>
        {{env('APP_NAME')}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($hotels as $hotel)
                        <tr>
                            <td>{{$hotel->id}}</td>
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
        <div class="modal-dialog modal-xl" role="document">
            <form class="user" id="createForm">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="CreateFormModalLabel">Create New Hotel</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-2">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a style="font-size: 11px;" class="nav-link active" id="tab1-tab" data-toggle="pill" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">{{ ucwords(strtolower('USER SIGN-UP')) }}</a>
                            <a style="font-size: 11px;" class="nav-link" id="tab2-tab" data-toggle="pill" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">{{ ucwords(strtolower('EMERGENCY CONTACT  DETAILS')) }}</a>
                            <a style="font-size: 11px;" class="nav-link" id="tab3-tab" data-toggle="pill" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">{{ ucwords(strtolower('OTHER DETAILS')) }}</a>
                            <a style="font-size: 11px;" class="nav-link" id="tab4-tab" data-toggle="pill" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">{{ ucwords(strtolower('HOTELS ONBOARDING')) }}</a>
                            <a style="font-size: 11px;" class="nav-link" id="tab5-tab" data-toggle="pill" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">{{ ucwords(strtolower('HOTELS CONTACT DETAILS')) }}</a>
                            <a style="font-size: 11px;" class="nav-link" id="tab6-tab" data-toggle="pill" href="#tab6" role="tab" aria-controls="tab6" aria-selected="false">{{ ucwords(strtolower('PARENT COMPANY')) }}</a>
                            <a style="font-size: 11px;" class="nav-link" id="tab7-tab" data-toggle="pill" href="#tab7" role="tab" aria-controls="tab7" aria-selected="false">{{ ucwords(strtolower('HOTEL CATEGORIZATION')) }}</a>
                            <a style="font-size: 11px;" class="nav-link" id="tab8-tab" data-toggle="pill" href="#tab8" role="tab" aria-controls="tab8" aria-selected="false">{{ ucwords(strtolower('HOTEL AMENITIES')) }}</a>
                            <a style="font-size: 11px;" class="nav-link" id="tab9-tab" data-toggle="pill" href="#tab9" role="tab" aria-controls="tab9" aria-selected="false">{{ ucwords(strtolower('ROOM TYPE PICTURES')) }}</a>
                            <a style="font-size: 11px;" class="nav-link" id="tab10-tab" data-toggle="pill" href="#tab10" role="tab" aria-controls="tab10" aria-selected="false">{{ ucwords(strtolower('HOTEL PRICE PER ROOM TYPE')) }}</a>
                            <a style="font-size: 11px;" class="nav-link" id="tab11-tab" data-toggle="pill" href="#tab11" role="tab" aria-controls="tab11" aria-selected="false">{{ ucwords(strtolower('BOOKING DAYS')) }}</a>
                            </div>
                        </div>
                        <div class="col-10">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                                    @include('hotels.form1')
                                </div>
                                <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                                    @include('hotels.form2')
                                </div>
                                <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                                    @include('hotels.form3')
                                </div>
                                <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
                                    @include('hotels.form4')
                                </div>
                                <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
                                    @include('hotels.form5')
                                </div>
                                <div class="tab-pane fade" id="tab6" role="tabpanel" aria-labelledby="tab6-tab">
                                    @include('hotels.form6')
                                </div>
                                <div class="tab-pane fade" id="tab7" role="tabpanel" aria-labelledby="tab7-tab">
                                    @include('hotels.form7')
                                </div>
                                <div class="tab-pane fade" id="tab8" role="tabpanel" aria-labelledby="tab8-tab">
                                    @include('hotels.form8')
                                </div>
                                <div class="tab-pane fade" id="tab9" role="tabpanel" aria-labelledby="tab9-tab">
                                    @include('hotels.form9')
                                </div>
                                <div class="tab-pane fade" id="tab10" role="tabpanel" aria-labelledby="tab10-tab">
                                    @include('hotels.form10')
                                </div>
                                <div class="tab-pane fade" id="tab11" role="tabpanel" aria-labelledby="tab411tab">
                                    @include('hotels.form11')
                                </div>
                            </div>
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
                ud_user_name: "ud_user_name",
                ud_first_name: "required",
                ud_last_name: "required",
                ud_email: "required",
                ud_phone_number: "required",
                ud_dob: "required",
                ud_gender: "required",
                ud_country: "required",
                ud_state: "required",
                ud_city: "required",
                ud_lga: "required",

                cd_name: "required",
                cd_address: "required",
                cd_email: "required",
                cd_phone_number: "required",

                od_ac_number: "required",
                od_name_of_bank: "required",
                od_id_type: "required",
                od_id_document: "required",
                od_id_number: "required",

                h_name: "required",
                h_description: "required",
                h_country: "required",
                h_state: "required",
                h_city: "required",
                h_street_name: "required",
                h_street_number: "required",
                h_lga: "required",
                h_zip_code: "required",

                hc_email: "required",
                hc_phone_number: "required",

                pc_name: "required",
                pc_rc_number: "required",

                hcat_type_of_hotel: "required",
                hcat_days_of_notice: "required",
                hcat_room_type: "required",
                hcat_bed_no: "required",
                hcat_guest_no: "required",
                hcat_bathroom_no: "required",
                hcat_room_no: "required",

                ha_amenities: "required",
                ha_room_type: "required",
                ha_room_type_amenities: "required",

                rt_room_type: "required",
                rt_front_view: "required",
                rt_bathroom_view: "required",
                rt_room_picture: "required",

                hp_room_type: "required",
                hp_corporate_price: "required",
                hp_discount_rate: "required",

                bday_min_booking_day: "required",
                bday_max_booking_day: "required",
                bday_checkin_time: "required",
                bday_checkout_time: "required",
                bday_cancellation_type: "required"
            },
            submitHandler: function(form) {
                var formData = new FormData(form);

                $("#createFormLoader").removeClass('d-none');
                $("#createSubmit").attr('disabled', true);
                $.ajax({
                    url: "<?php echo asset('') ?>"+"hotels",
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