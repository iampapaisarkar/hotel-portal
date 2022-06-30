<div class="row">
     <div class="col-12 row m-0">
        <h4>Meal Detials:</h4>
        <div class="col-12" id="mealDetails"></div>
        <button class="btn btn-icon btn-primary" type="button" onclick="addMealsRow()">
            <i data-feather="plus" class="me-25"></i>
            <span>Add New</span>
        </button>
    </div>
 </div>

 <script>
        $(document).ready(function() {
            var $disabledResults = $("#rm_restaurant_type");
            $disabledResults.select2({
                multiple: true,
                selectOnClose: false,
                placeholder: "Select Type",
            });

            var $disabledResults = $("#rm_meals");
            $disabledResults.select2({
                multiple: true,
                selectOnClose: false,
                placeholder: "Select Meals",
            });

            
        });

        function addMealsRow(){
                var rowCount = $('#mealDetails').length;

                if(rowCount == 0){
                    var formHtml = '<div class="row mealDetails" id="mealsID_'+rowCount+'">\
                                        <div class="col-md-6 col-12">\
                                            <div class="mb-1">\
                                                <label class="form-label" for="fname">Meal Name</label>\
                                                <input type="text" name="meals['+rowCount+'][name]" class="form-control" id="fname'+rowCount+'" aria-describedby="fname"\
                                                    placeholder="Directors Firstname" />\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6 col-12">\
                                            <div class="mb-1">\
                                                <label class="form-label" for="lname">Meal Price</label>\
                                                <input type="number" name="meals['+rowCount+'][price]" class="form-control " id="lname'+rowCount+'" aria-describedby="lname"\
                                                    placeholder="Director\'s Lastname" />\
                                            </div>\
                                        </div>\
                                        <div class="col-lg-6 col-md-12 mb-3 mb-sm-0">\
                                            <label for="formFile" class="form-label">Meal Photo (IAMGE/2MB max)</label>\
                                            <input class="form-control " name="meals['+rowCount+'][photo]" type="file" id="photo'+rowCount+'" accept="image/png, image/jpeg, " />\
                                        </div>\
                                        <div class="col-md-6 col-12 mb-50">\
                                            <div class="mb-1">\
                                                <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button"  id="deleteMealsRow_'+rowCount+'" onclick="deleteMealsRow('+rowCount+')">\
                                                    <i data-feather="x" class="me-25"></i>\
                                                    <span>Delete</span>\
                                                </button>\
                                            </div>\
                                        </div>\
                                    </div>';

                    $("#mealDetails").append(formHtml);
                }else{
                    var formHtml = '<div class="row mealDetails" id="mealsID_'+rowCount+'">\
                                        <div class="col-md-6 col-12">\
                                            <div class="mb-1">\
                                                <label class="form-label" for="fname">Meal Name</label>\
                                                <input type="text" name="meals['+rowCount+'][name]" class="form-control" id="fname'+rowCount+'" aria-describedby="fname"\
                                                    placeholder="Meal Name" />\
                                            </div>\
                                        </div>\
                                        <div class="col-md-6 col-12">\
                                            <div class="mb-1">\
                                                <label class="form-label" for="lname">Meal Price</label>\
                                                <input type="number" name="meals['+rowCount+'][price]" class="form-control " id="lname'+rowCount+'" aria-describedby="lname"\
                                                    placeholder="Meal Price" />\
                                            </div>\
                                        </div>\
                                        <div class="col-lg-6 col-md-12 mb-3 mb-sm-0">\
                                            <label for="formFile" class="form-label">Meal Photo (IAMGE/2MB max)</label>\
                                            <input class="form-control " name="meals['+rowCount+'][photo]" type="file" id="photo'+rowCount+'" accept="image/png, image/jpeg, " />\
                                        </div>\
                                        <div class="col-md-6 col-12 mb-50">\
                                            <div class="mb-1">\
                                                <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button"  id="deleteMealsRow_'+rowCount+'" onclick="deleteMealsRow('+rowCount+')">\
                                                    <i data-feather="x" class="me-25"></i>\
                                                    <span>Delete</span>\
                                                </button>\
                                            </div>\
                                        </div>\
                                    </div>';
                    $("#mealDetails").append(formHtml);
                }
            }

            function deleteMealsRow(id){
                $("#mealsID_"+id).remove();
            }
 </script>