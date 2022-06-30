<div class="row">
    <div class="col-12 col-md-6">
         <label for="hcat_type_of_hotel">Type of Hotel:</label>
         <select name="hcat_type_of_hotel" id="inputState" class="form-control  @error('hcat_type_of_hotel') is-invalid @enderror">
            <option selected value="">Select Type</option>
            <option>1 Star</option>
            <option>2 Star</option>
            <option>3 Star</option>
            <option>4 Star</option>
            <option>5 Star</option>
        </select>
        @error('hcat_type_of_hotel')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="hcat_days_of_notice">Days of Notice:</label>
         <select name="hcat_days_of_notice" id="inputState" class="form-control  @error('hcat_days_of_notice') is-invalid @enderror">
            <option selected value="">Select Days Before</option>
            <option>1 Days Before</option>
            <option>2 Days Before</option>
            <option>3 Days Before</option>
            <option>7 Days Before</option>
        </select>
        @error('hcat_days_of_notice')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="hcat_room_type">Room Type:</label>  <br>
         <select name="hcat_room_type[]" id="hcat_room_type" class="form-control  @error('hcat_room_type') is-invalid @enderror">
            <option>Standard Single</option>
            <option>Standard Double</option>
            <option>Hotel-Apartments</option>
            <option>King or Queen Room</option>
            <option>Executive Suite</option>
            <option>Family Suite</option>
            <option>Penthouse</option>
            <option>Presidential Suite</option>
            <option>Twin-Room</option>
        </select>
        @error('hcat_room_type')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6">
         <label for="hcat_amenities">Amenities:</label> <br>
         <select id="hcat_amenities" name="hcat_amenities" class="form-control w-100  @error('hcat_amenities') is-invalid @enderror">
            <option>Parking</option>
            <option>Free Wi-Fi</option>
            <option>Room Service</option>
            <option>24-Hour Guest Reception</option>
            <option>Complimentary Toiletries</option>
            <option>Healthy Breakfast</option>
            <option>Ample Wall Outlets</option>
            <option>Hair Styling Tools</option>
            <option>Flexible Checkout</option>
            <option>Pool</option>
            <option>Mini fridge</option>
            <option>Complimentary Electronics Chargers</option>
            <option>Clothing Iron</option>
            <option>Business Facilities</option>
            <option>Transportation Information</option>
            <option>Free Breakfast</option>
            <option>Laundry Services</option>
            <option>Spa & Wellness Amenities</option>
            <option>Exercise Facilities and Accessories</option>
            <option>Daily Newspaper</option>
            <option>Entertainment</option>
            <option>Complimentary Luggage storage</option>
            <option>Cribs & Cots for Children</option>
            <option>Curated Experiences</option>
            <option>Custom Offers</option>
            <option>Fancy Bathrobes</option>
            <option>Kid-friendly Rooms and Products</option>
            <option>Premium Bedding</option>
            <option>Stain Remover Wipes</option>
            <option>Pet-friendly Rooms</option>
            <option>Champagne Bar</option>
            <option>Smoking</option>
            <option>Non-smoking</option>
            <option>Partying</option>
            <option>No Partying</option>
        </select>
        @error('hcat_amenities')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
     <div class="col-12 col-md-6 mb-3">
         <label for="front_view">Front View of Hotel:</label>
         <input type="file" name="hcat_front_view" value="{{ old('hcat_front_view') }}"
             class="form-control form-control @error('hcat_front_view') is-invalid @enderror" id="hcat_front_view"
             aria-describedby="hcat_front_view" placeholder="Enter phone number">
         @error('hcat_front_view')
         <span class="invalid-feedback" role="alert">
             <strong>{{ $message }}</strong>
         </span>
         @enderror
     </div>
 </div>

<div id="dynamicForms">
   
</div>

 <script>
    $(document).ready(function() {
        var $hcat_room_type = $("#hcat_room_type");
        $hcat_room_type.select2({
            multiple: true,
            selectOnClose: false,
            placeholder: "Select Room Type",
        });
        var $hcat_amenities = $("#hcat_amenities");
        $hcat_amenities.select2({
            multiple: true,
            selectOnClose: false,
            placeholder: "Select Amenities",
        });

        var $ha_room_type_amenities = $(".ha_room_type_amenities");
        $ha_room_type_amenities.select2({
            multiple: true,
            selectOnClose: false,
            placeholder: "Select Room Type Amenities",
        });

        var totalRoomTypes = $("#hcat_room_type").val()
        createFormBlades(totalRoomTypes);

        $('#hcat_room_type').change(function() {
            totalRoomTypes = $(this).val()
            createFormBlades(totalRoomTypes);
        });

        function createFormBlades(totalRoomTypes){

            var htmlString = "";

            totalRoomTypes.forEach((totalRoomType, index) => {
                htmlString += '<h4>'+totalRoomType+'</h4>\
                        <div class="">\
                        <h6>Room setup</h6>\
                        <hr>\
                        <div class="row">\
                            <input type="hidden" name="room_setup['+index+'][ha_room_type]" value="'+totalRoomType+'" />\
                            <div class="col-12 col-md-6">\
                                <label for="room_setup['+index+'][ha_room_type_amenities]">Room Type Amenities:</label>\
                                <select name="room_setup['+index+'][ha_room_type_amenities]" id="room_setup['+index+'][ha_room_type_amenities]" class="form-control ha_room_type_amenities">\
                                    <option>Free Wi-Fi</option>\
                                    <option>Room Service</option>\
                                    <option>24-Hour Guest Reception</option>\
                                    <option>Complimentary Toiletries</option>\
                                    <option>Complimentary Breakfast</option>\
                                    <option>Ample Wall Outlets</option>\
                                    <option>Hair Styling Tools</option>\
                                    <option>Mini fridge</option>\
                                    <option>Complimentary Electronics Chargers</option>\
                                    <option>Clothing Iron</option>\
                                    <option>Daily Newspaper</option>\
                                    <option>Entertainment</option>\
                                    <option>Complimentary Luggage storage</option>\
                                    <option>Cribs & Cots for Children/Fancy Bathrobes</option>\
                                    <option>Kid-friendly Rooms and Products</option>\
                                    <option>Premium Bedding</option>\
                                    <option>Stain Remover Wipes</option>\
                                    <option>Pet-friendly Rooms</option>\
                                    <option>Champagne Bar</option>\
                                    <option>Smoking</option>\
                                    <option>Non-smoking</option>\
                                    <option>Partying</option>\
                                    <option>No Partying</option>\
                                    <option>Standard</option>\
                                    <option>Standard</option>\
                                    <option>Standard</option>\
                                    <option>Standard</option>\
                                </select>\
                            </div>\
                            <div class="col-12 col-md-6 mb-3">\
                                <label for="room_setup['+index+'][ha_room_type_no]">Number of Room Type in Hotel:</label>\
                                <input type="number" name="room_setup['+index+'][ha_room_type_no]"\
                                    class="form-control form-control" id="room_setup['+index+'][ha_room_type_no]" aria-describedby="room_setup['+index+'][ha_room_type_no]"\
                                    placeholder="Enter room no">\
                            </div>\
                            <div class="col-12 col-md-6 mb-3">\
                                <label for="room_setup['+index+'][ha_bed_no]">Number of Beds:</label>\
                                <input type="number" name="room_setup['+index+'][ha_bed_no]"\
                                    class="form-control form-control" id="room_setup['+index+'][ha_bed_no]" aria-describedby="[ha_bed_no]"\
                                    placeholder="Enter bed no">\
                            </div>\
                            <div class="col-12 col-md-6 mb-3">\
                                <label for="room_setup['+index+'][ha_guest_no]">Number of Guest:</label>\
                                <input type="number" name="room_setup['+index+'][ha_guest_no]"\
                                    class="form-control form-control" id="room_setup['+index+'][ha_guest_no]" aria-describedby="room_setup['+index+'][ha_guest_no]"\
                                    placeholder="Enter guest no">\
                            </div>\
                            <div class="col-12 col-md-6 mb-3">\
                                <label for="room_setup['+index+'][ha_bathroom_no]">Number of Bathrooms:</label>\
                                <input type="number" name="room_setup['+index+'][ha_bathroom_no]"\
                                    class="form-control form-control" id="room_setup['+index+'][ha_bathroom_no]" aria-describedby="room_setup['+index+'][ha_bathroom_no]"\
                                    placeholder="Enter bathroom no">\
                            </div>\
                        </div>\
                        </div>\
                        <div class="my-2">\
                        <h6>Room Type Picture</h6>\
                        <hr>\
                        <div class="row">\
                            <input type="hidden" name="room_type['+index+'][rt_room_type]" value="'+totalRoomType+'" />\
                            <div class="col-12 col-md-6 mb-3">\
                                <label for="bathroom_view">Bathroom Pictures:</label>\
                                <input type="file" name="room_type['+index+'][rt_bathroom_view]"\
                                    class="form-control form-control" id="room_type['+index+'][rt_bathroom_view]"\
                                    aria-describedby="room_type['+index+'][rt_bathroom_view]" placeholder="Enter phone number">\
                            </div>\
                            <div class="col-12 col-md-6 mb-3">\
                                <label for="room_picture">Room pictures:</label>\
                                <input type="file" name="room_type['+index+'][rt_room_picture]"\
                                    class="form-control form-control" id="room_type['+index+'][rt_room_picture]"\
                                    aria-describedby="room_type['+index+'][rt_room_picture]" placeholder="Enter phone number">\
                            </div>\
                        </div>\
                        </div>\
                        <div class="">\
                        <h6>Hotel Price Per Room</h6>\
                        <hr>\
                        <div class="row">\
                            <input type="hidden" name="hotel_price['+index+'][hp_room_type]" value="'+totalRoomType+'" />\
                            <div class="col-12 col-md-6 mb-3">\
                                <label for="corporate_price">Base Price:</label>\
                                <input type="number" name="hotel_price['+index+'][hp_base_price]"\
                                    class="form-control form-control" id="hotel_price['+index+'][hp_base_price]"\
                                    aria-describedby="hotel_price['+index+'][hp_base_price]" placeholder="Enter corporate price">\
                            </div>\
                            <div class="col-12 col-md-6">\
                                <label for="hotel_price['+index+'][hp_discount_rate]">Discount Rate (%):</label>\
                                <select name="hotel_price['+index+'][hp_discount_rate]" id="inputState" class="form-control">\
                                    <option selected value="">Select Rate</option>\
                                    <option>0</option>\
                                    <option>5</option>\
                                    <option>10</option>\
                                    <option>15</option>\
                                    <option>20</option>\
                                    <option>25</option>\
                                    <option>30</option>\
                                    <option>35</option>\
                                    <option>40</option>\
                                    <option>45</option>\
                                    <option>50</option>\
                                </select>\
                            </div>\
                            <div class="col-12 col-md-6 mb-3">\
                                <label for="discount_rate">Discount Price:</label>\
                                <input readonly type="number" name="hotel_price['+index+'][hp_discount_price]" value=""\
                                    class="form-control form-control" id="hotel_price['+index+'][hp_discount_price]"\
                                    aria-describedby="hotel_price['+index+'][hp_discount_price]" placeholder="Enter discount rate">\
                            </div>\
                        </div>\
                        </div>';

                        // $('#hotel_price['+index+'][hp_base_price]').keyup(function(){
                        //     console.log("hp_base_price")
                        //     var basePrice = parseint($('#hotel_price['+index+'][hp_base_price]').val())
                        //     var discountRate = parseint($('#hotel_price['+index+'][hp_discount_rate]').val())
                        //     $('#hotel_price['+index+'][hp_discount_price]').val() = (basePrice - (basePrice*discountRate/100))
                        // });
            });
            $("#dynamicForms").html(htmlString);

            
        }

        
    });
 </script>
 <style>
    .select2{
        width: 100%!important;
    }
 </style>