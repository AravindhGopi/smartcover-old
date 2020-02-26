(function ($) {
    $(document).ready(function () {

        function clean(node) {
            for (var n = 0; n < node.childNodes.length; n++) {
                var child = node.childNodes[n];
                if
                (
                    child.nodeType === 8
                    ||
                    (child.nodeType === 3 && !/\S/.test(child.nodeValue))
                ) {
                    node.removeChild(child);
                    n--;
                }
                else if (child.nodeType === 1) {
                    clean(child);
                }
            }
        }

        clean(document);

        /**************************************************/
        /*           Drag and Drop Function               */
        /**************************************************/
        var drop = $("input");
        drop.on('dragenter', function (e) {
            $(".drop").css({
                "border": "4px dashed #DADFE3",
                "background": "rgba(0, 153, 255, .05)"
            });
            $(".cont").css({
                "color": "#09f"
            });
        }).on('dragleave dragend mouseout drop', function (e) {
            $(".drop").css({
                "border": "3px dashed #DADFE3",
                "background": "transparent"
            });
            $(".cont").css({
                "color": "#8E99A5"
            });
        });
        var files1 = 0;

        function handleFileSelect(evt) {
            var string = $(this).attr('id'),
                substring = "_camera";
            if (string.indexOf(substring) !== -1) {
                var ret = string.replace(substring, '');
                if (typeof $("#" + ret) !== "undefined") {
                    $("#" + ret).val("");
                    $("#" + ret + "_list").html("");
                }
            } else if (typeof $("#" + string + "_camera") !== "undefined") {
                $("#" + string + "_camera").val("");
                $("#" + string + "_camera_list").html("");
            }
            var id = $(this).data("previewid");
            // var output = $(this).prev();
            var files = evt.target.files; // FileList object

            // Loop through the FileList and render image files as thumbnails.
            for (var i = 0, f; f = files[i]; i++) {
                if (f.type.match('image.*')) {
                    //continue;

                    var reader = new FileReader();

                    // Closure to capture the file information.
                    reader.onload = (function (theFile) {
                        return function (e) {
                            // Render thumbnail.
                            //var span = '<span class="photo_out"><img class="thumb" src="'+e.target.result+'" title="'+escape(theFile.name)+'"/></span>';
                            var span = document.createElement('span');
                            span.className = "photo_out";
                            span.innerHTML = ['<img class="thumb" src="', e.target.result,
                                '" title="', escape(theFile.name), '"/>'].join('');
                            document.getElementById(id).insertBefore(span, null);
                            //$(".list").insertBefore(span, null);
                        };
                    })(f);

                    // Read in the image file as a data URL.
                    reader.readAsDataURL(f);

                } else {
                }

            }
        }


        $('#applicant_id_front,#applicant_id_front_camera,#applicant_id_back,#applicant_id_back_camera' +
            ',#applicant_photo,#applicant_photo_camera,#applicant_address_proof,#applicant_passport_id_front,#applicant_passport_id_front_camera,' +
            '#applicant_passport_id_back,#applicant_passport_id_back_camera,#applicant_passport_photo,#applicant_passport_photo_camera,#applicant_passport_address_proof').change(handleFileSelect);
        $('#jointapp_passport_address_proof,#jointapp_passport_photo,#jointapp_passport_photo_camera,#jointapp_passport_id_back,' +
            '#jointapp_passport_id_front,#jointapp_passport_id_front_camera,#jointapp_licence_id_front_camera,#jointapp_licence_address_proof,#jointapp_licence_photo,#jointapp_licence_photo_camera,' +
            '#jointapp_licence_id_back,#jointapp_passport_id_back_camera,#jointapp_licence_id_back_camera,#jointapp_licence_id_front').change(handleFileSelect);


        /**************************************************/
        /*            Range Slider Function               */
        /**************************************************/

        var $range = $("#js-range-slider"),
            $input = $("#js-input"),
            instance,
            min = 500,
            max = 5000;

        $range.ionRangeSlider({
            type: "single",
            grid: true,
            grid_num: 9,
            prettify_enabled: false,
            step: 500,
            min: min,
            max: max,
            from: 500,
            onStart: function (data) {
                $input.prop("value", data.from);
            },
            onChange: function (data) {
                $input.prop("value", data.from);
            }
        });

        instance = $range.data("ionRangeSlider");

        $input.on("change keyup", function () {
            var val = $(this).prop("value");

            // validate
            if (val < min) {
                val = min;
            } else if (val > max) {
                val = max;
            }

            instance.update({
                from: val
            });
        });
        jQuery.validator.addMethod("amount", function(value, element) {
            if(value !== "") {
                return /^\d+(\.\d{1,2})?$/.test( value );
            } else {
                return true;
            }
        }, 'Please enter a valid amount.');
        var validator = $('#profileForm').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                "applicant_first_name": {required: true},
                "applicant_surname": {required: true},
                "is_joint_application": {required: true},
                "is_over_18": {required: true},
                "applicant_title": {required: true},
                "applicant_birth_year": {required: true},
                "applicant_birth_month": {required: true},
                "applicant_birth_date": {required: true},
                "current_street_number": {required: true},
                "current_street_address": {required: true},
                "current_suburb": {required: true},
                "current_city": {required: true},
                "current_postcode": {required: true},
                "current_address_from_year": {required: true},
                "current_address_from_month": {required: true},
                "applicant_id_type": {required: true},
                "applicant_email": {required: true,email: true},
                "applicant_marital_status": {required: true},
                "applicant_no_of_dependents": {required: true},
                "applicant_mobile": {required: true,minlength:6},
                "applicant_landline": {minlength:6},
                "applicant_work_phone": {minlength:6},
                "best_time_to_contact": {required: true},
                "referral_first_name": {required: true},
                "referral_surname": {required: true},
                "referral_street_number": {required: true},
                "referral_street_name": {required: true},
                "referral_suburb": {required: true},
                "referral_landline": {minlength:6},
                "referral_mobile": {required: true,minlength:6},
                "employment_status": {required: true},
                //"job_title": {required: true},
                //"duration_of_employment": {required: true},
                //"employer_name": {required: true},
                //"employer_contact_number": {required: true,minlength:5, number: true},
                // "employment_period_from": {required: true},
                //"employment_period_to": {required: true},
                "income": {required: true,amount:true},
                "additional_income": {amount:true},
                "living_cost_amount": {required: true, amount:true},
                "jointapp_income": {amount:true},
                "jointapp_additional_income": {amount:true},
                "jointapp_living_cost_amount": {amount:true},
                "jointapp_expense_amount": {amount:true},
                "income_frequency": {required: true},
                "livingcost_frequency": {required: true},
                //"is_vehicle_security": {required: true},
                "referral_city": {required: true},
                //"manager_name": {required: true},

                "other_loan_amount": {
                    required: function(element){
                        return $('input[name=need_custom_amount]:checked').val() === "yes";
                    },amount:true
                },

                "jointapp_residential_status": {required: true},
                "jointapp_applicant_title": {required: true},
                "jointapp_applicant_first_name": {required: true},
                "jointapp_applicant_surname": {required: true},
                "jointapp_applicant_birth_year": {required: true},
                "jointapp_applicant_birth_month": {required: true},
                "jointapp_applicant_birth_date": {required: true},
                "jointapp_current_street_number": {required: true},
                "jointapp_current_street_address": {required: true},
                "jointapp_current_suburb": {required: true},
                "jointapp_current_city": {required: true},
                "jointapp_current_postcode": {required: true},
                "jointapp_current_address_from_year": {required: true},
                "jointapp_current_address_from_month": {required: true},
                "jointapp_id_type": {required: true},
                "jointapp_marital_status": {required: true},
                "jointapp_no_of_dependents": {required: true},
                "jointapp_applicant_email": {required: true,email: true},
                "jointapp_applicant_mobile": {required: true,minlength:6},
                "jointapp_applicant_landline": {minlength:6},
                "jointapp_applicant_work_phone": {minlength:6},
                "jointapp_best_time_to_contact": {required: true},
                "jointapp_referral_first_name": {required: true},
                "jointapp_referral_surname": {required: true},
                "jointapp_referral_street_name": {required: true},
                "jointapp_referral_street_number": {required: true},
                "jointapp_referral_suburb": {required: true},
                "jointapp_referral_city": {required: true},
                "jointapp_referral_landline": {minlength:6},
                "jointapp_referral_mobile": {required: true,minlength:6},

                "jointapp_employment_status": {required: true},
                //"jointapp_job_title": {required: true},
                //"jointapp_duration_of_employment": {required: true},
                //"jointapp_employer_name": {required: true},
                //"jointapp_employer_contact_number": {required: true,minlength:5, number: true},
                //"jointapp_manager_name": {required: true},
                // "jointapp_employment_period_from": {required: true}, 
                //"jointapp_employment_period_to": {required: true},
                "jointapp_income": {required: true},
                "jointapp_income_frequency": {required: true},
                "loan_reason": {required: true},
                //"privacy_act_agreement":{required:true,minlength: 1}

                "licence_number":{
                    required: function(element){
                        if($('#applicant_id_type').val() == "NZ Drivers License"){
                            return true;
                        }else{
                            return false;
                        }
                    },amount:true
                },
                "version_number":{
                    required: function(element){
                        if($('#applicant_id_type').val() == "NZ Drivers License"){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "licence_expiry_year":{
                    required: function(element){
                        if($('#applicant_id_type').val() == "NZ Drivers License"){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "licence_expiry_month":{
                    required: function(element){
                        if($('#applicant_id_type').val() == "NZ Drivers License"){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "passport_number":{
                    required: function(element){
                        if(($('#applicant_id_type').val() == "NZ Passport") || ($('#applicant_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "passport_issue_year":{
                    required: function(element){
                        if(($('#applicant_id_type').val() == "NZ Passport") || ($('#applicant_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "passport_issue_month":{
                    required: function(element){
                        if(($('#applicant_id_type').val() == "NZ Passport") || ($('#applicant_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "passport_issue_date":{
                    required: function(element){
                        if(($('#applicant_id_type').val() == "NZ Passport") || ($('#applicant_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "passport_expiry_year":{
                    required: function(element){
                        if(($('#applicant_id_type').val() == "NZ Passport") || ($('#applicant_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "passport_expiry_month":{
                    required: function(element){
                        if(($('#applicant_id_type').val() == "NZ Passport") || ($('#applicant_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "passport_expiry_date":{
                    required: function(element){
                        if(($('#applicant_id_type').val() == "NZ Passport") || ($('#applicant_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "employment_period_from":{
                    required: function(element){
                        if(($('#employment_status').val() == "Full Time Employed") || ($('#employment_status').val() == "Part Time Employed")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "repayment_frequency":{required:true},
                "repayment_start_date":{required:true},
                "repayment_bank_account_number1":{required:true,digits:true,minlength:2,maxlength:2},
                "repayment_bank_account_number2":{required:true,digits:true,minlength:4,maxlength:4},
                "repayment_bank_account_number3":{required:true,digits:true,minlength:7,maxlength:7},
                "repayment_bank_account_number4":{required:true,digits:true,minlength:1,maxlength:3},
                "repayment_bank_account_name":{required:true},
                "need_custom_amount" : {required:true},
                "repayment_bank_authorization" : {required:true},
                "repayment_authorizer_name" : {required:true},
                "repayment_authorization" : {required:true},
                "jointapp_licence_number":{
                    required: function(element){
                        if($('#jointapp_id_type').val() == "NZ Drivers License"){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "jointapp_version_number":{
                    required: function(element){
                        if($('#jointapp_id_type').val() == "NZ Drivers License"){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "jointapp_licence_expiry_year":{
                    required: function(element){
                        if($('#jointapp_id_type').val() == "NZ Drivers License"){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "jointapp_licence_expiry_month":{
                    required: function(element){
                        if($('#jointapp_id_type').val() == "NZ Drivers License"){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "jointapp_passport_number":{
                    required: function(element){
                        if(($('#jointapp_id_type').val() == "NZ Passport") || ($('#jointapp_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "jointapp_passport_issue_year":{
                    required: function(element){
                        if(($('#jointapp_id_type').val() == "NZ Passport") || ($('#jointapp_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "jointapp_passport_issue_month":{
                    required: function(element){
                        if(($('#jointapp_id_type').val() == "NZ Passport") || ($('#jointapp_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "jointapp_passport_issue_date":{
                    required: function(element){
                        if(($('#jointapp_id_type').val() == "NZ Passport") || ($('#jointapp_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "jointapp_passport_expiry_year":{
                    required: function(element){
                        if(($('#jointapp_id_type').val() == "NZ Passport") || ($('#jointapp_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "jointapp_passport_expiry_month":{
                    required: function(element){
                        if(($('#jointapp_id_type').val() == "NZ Passport") || ($('#jointapp_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "jointapp_passport_expiry_date":{
                    required: function(element){
                        if(($('#jointapp_id_type').val() == "NZ Passport") || ($('#jointapp_id_type').val() == "NZ Passport")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
                "jointapp_employment_period_from":{
                    required: function(element){
                        if(($('#jointapp_employment_status').val() == "Full Time Employed") || ($('#jointapp_employment_status').val() == "Part Time Employed")){
                            return true;
                        }else{
                            return false;
                        }
                    }
                },
            },
            messages: {

                "applicant_first_name": {required: "Please enter your first name."},
                "applicant_surname": {required: "Please enter your surname."},
                "is_joint_application": {required: "Please let us know if this is a joint application"},
                "is_over_18": {required: "Please confirm your age."},

                "applicant_title": {required: "Please enter your title."},
                "applicant_birth_year": {required: "Please enter the year of birth."},
                "applicant_birth_month": {required: "Please enter the month of birth."},
                "applicant_birth_date": {required: "Please enter the day of birth."},
                "current_street_number": {required: "Please enter your street number."},
                "current_street_address": {required: "Please enter your street address."},
                "current_suburb": {required: "Please enter your suburb."},
                "current_city": {required: "Please enter your city."},
                "current_postcode": {required: "Please enter your postcode."},
                "years_at_current_from": {required: "Please enter the date from you start living at this address."},
                //"years_at_current_to": {required: "Please enter the year to."},
                "applicant_id_type": {required: "Please select the ID type."},
                "applicant_email": {required: "Please enter you email.",email: "Please enter a valid email"},
                "applicant_marital_status": {required: "Please select the marital status."},
                "applicant_no_of_dependents": {required: "Please select the no.of dependencies."},
                "applicant_mobile": {required: "Please enter your mobile number.",minlength:"Please enter a valid phone number(min length-6)"},
                "applicant_landline": {minlength:"Please enter a valid number(min length-6)"},
                "applicant_work_phone": {minlength:"Please enter a valid number(min length-6)"},
                "best_time_to_contact": {required: "Please enter the best time to contact."},
                "referral_first_name": {required: "Please enter the first name."},
                "referral_surname": {required: "Please enter the surname."},
                "referral_street_number": {required: "Please enter the street number."},
                "referral_street_name": {required: "Please enter the street name."},
                "referral_suburb": {required: "Please enter the suburb."},
                "referral_mobile": {required: "Please enter the mobile number.",minlength:"Please enter a valid number(min length-6)"},
                "referral_landline": {minlength:"Please enter a valid number(min length-6)"},
                "employment_status": {required: "Please select the employee status."},
                "job_title": {required: "Please enter the job title."},
                "duration_of_employment": {required: "Please select the duration."},
                "employer_name": {required: "Please enter the name."},
                "employer_contact_number": {required: "Please enter the contact number.",minlength:"Please enter a valid number(min length-6)"},
                "employment_period_from": {required: "Please enter the employment start date."},
                "employment_period_to": {required: "Please enter the to date."},
                "income": {required: "Please enter your income.",money:"Please enter a valid amount (no spaces, dots or $ symbols, just numbers)"},
                "income_frequency": {required: "Please select income frequency."},
                //"is_vehicle_security": {required: "Please select the option."},
                "referral_city": {required: "Please enter the city."},
                "manager_name": {required: "Please enter the manager name."},
                "other_loan_amount": {
                    required: "Please enter the loan amount."
                },
                
                

                "jointapp_residential_status": {required: "Please select the residential status."},
                "jointapp_applicant_title": {required: "Please enter the title."},
                "jointapp_applicant_first_name": {required: "Please enter the first name."},
                "jointapp_applicant_surname": {required: "Please enter the surname."},
                "jointapp_applicant_birth_year": {required: "Please select the year of birth"},
                "jointapp_applicant_birth_month": {required: "Please select the month of birth"},
                "jointapp_applicant_birth_date": {required: "Please select the day of birth"},
                "jointapp_current_street_number": {required: "Please enter the street number."},
                "jointapp_current_suburb": {required: "Please enter the suburb."},
                "jointapp_current_city": {required: "Please enter the city."},
                "jointapp_current_postcode": {required: "Please enter the postcode."},
                "jointapp_years_at_current_from": {required: "Please enter the date from you start living at this address."},
                //"jointapp_years_at_current_to": {required: "Please enter to date."},
                "jointapp_id_type": {required: "Please select the ID type"},
                "jointapp_marital_status": {required: "Please select the marital status"},
                "jointapp_no_of_dependents": {required: "Please select the no.of dependencies"},

                "jointapp_applicant_email": {required: "Please enter the email.",email: "Please enter a valid email"},
                "jointapp_applicant_mobile": {required: "Please enter the mobile number.",minlength:"Please enter a valid number(min length-6)"},
                "jointapp_applicant_landline": {minlength:"Please enter a valid number(min length-6)"},
                "jointapp_applicant_work_phone": {minlength:"Please enter a valid number(min length-6)"},
                "jointapp_best_time_to_contact": {required: "Please enter the best time to contact."},
                "jointapp_referral_first_name": {required: "Please enter the first name."},
                "jointapp_referral_surname": {required: "Please enter the surname."},
                "jointapp_referral_street_number": {required: "Please enter the street number."},
                "jointapp_referral_street_name": {required: "Please enter the street name."},
                "jointapp_referral_suburb": {required: "Please enter the suburb."},
                "jointapp_referral_mobile": {required: "Please enter the mobile.",minlength:"Please enter a valid number(min length-6)"},
                "jointapp_referral_landline": {minlength:"Please enter a valid number(min length-6)"},

                "jointapp_employment_status": {required: "Please select the employment status "},
                "jointapp_job_title": {required: "Please enter the title"},
                "jointapp_duration_of_employment": {required: "Please select the duration"},
                "jointapp_employer_name": {required: "Please enter the name"},
                "jointapp_employer_contact_number": {required: "Please enter the contact number",minlength:"Please enter a valid number(min length-6)"},
                "jointapp_manager_name": {required: "Please enter the manager name"},
                "jointapp_employment_period_from": {required: "Please enter the employment start date."},
                "jointapp_employment_period_to": {required: "Please enter the to date."},
                "jointapp_income": {required: "Please enter the income."},
                "jointapp_income_frequency": {required: "Please select the income frequency."},
                //"privacy_act_agreement":{required:"In order to proceed please accept the Privacy Waiver."}
            },

            invalidHandler: function (event, validator) { //display error alert on form submit
            },

            highlight: function (element) {
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                    .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },

            success: function (label) {
                label
                    .closest('.form-group').removeClass('has-error'); // set success class to the control group
                label
                    .closest('.form-group').removeClass('error');
            },
            errorPlacement: function (error, element) {
                if (element.attr("type") == "radio") {
                    $(element).closest('.form-group').append(error);
                } else {
                    error.insertAfter(element);
                }

            },
            submitHandler: function (form) {
                alert($("#privacy_act_agreement").val());
    
                return false;
            }
            

        });
        /**************************************************/
        /*               Prev Next Function               */
        /**************************************************/
        //$(".hideVehicle").hide();
        $("body").on("change", "#residential_status", function () {
            if ($(this).val() == "NZ Citizen") {
                $("#visaHolder").hide();
            } else {
                $("#visaHolder").show();
            }
        }).on("change", "#jointapp_residential_status", function () {
            if ($(this).val() == "NZ Citizen") {
                $("#jointapp_visaHolder").hide();
            } else {
                $("#jointapp_visaHolder").show();
            }
        })/*.on("click", "input[type='radio'][name='is_vehicle_security']", function () {
         if ($(this).val() == "no") {
         $(".hideVehicle").hide();
         $("#vehicle_make").val("");
         $("#vehicle_model").val("");
         $("#vehicle_year").val("");
         $("#vehicle_registration").val("");
         $("#registered_owner").val("");
         $('#vehicle_agreement').prop('checked', false)
         } else {
         $(".hideVehicle").show();
         }
         })*/.on("change", "#jointapp_employment_status", function () {
            if ($(this).val() == "Beneficiary") {
                $("#jointapp_beneficiary_type_holder").show();
            } else {
                $("#jointapp_beneficiary_type_holder").hide();
            }
        }).on("change", "#jointapp_beneficiary_type", function () {
            if ($(this).val() == "Beneficiary") {
                $("#jointapp_beneficiary_comment_holder").show();
            } else {
                $("#jointapp_beneficiary_comment_holder").hide();
            }
        }).on("change", "#employment_status", function () {
            if ($(this).val() == "Beneficiary") {
                $("#beneficiary_type_holder").show();
            } else {
                $("#beneficiary_type_holder").hide();
            }
        }).on("change", "#beneficiary_type", function () {
            if ($(this).val() == "Beneficiary") {
                $("#beneficiary_comment_holder").show();
            } else {
                $("#beneficiary_comment_holder").hide();
            }
        }).on("click","#online_application_submit",function(){
            validator.destroy();
            if($("#privacy_act_agreement").prop("checked") == false) {
                $("#alertHolder").show();
                 $('html, body').animate({
                    'scrollTop': $("#profileForm").position().top
                });
                return false;
            }
            $("#loader").show();
            $("#profileForm").submit();
        }).on("click",$('input[name=need_custom_amount]'),function() {
            if($('input[name=need_custom_amount]:checked').val() === "yes") {
                $("#loanSliderHolder").hide();
                $("#range_out").val(0);
                $("#loan_amount").val(0);
                $("#loanAmountHolder").show();
            } else {
                $("#loanSliderHolder").show();
                $("#other_loan_amount").val("");
                $("#range_out").val(0);
                $("#loan_amount").val(0);
                $("#loanAmountHolder").hide();
            }
        });

        $('#profileForm fieldset:first-child').fadeIn('slow');

        // next step
        $('#profileForm .btn-next').on('click', function () {
            var parent_fieldset = $(this).parents('fieldset');
            var next_step = true;

            var validInput = true;
            var validSelect = true;
            var i = 0;
            var $inputs = $(this).closest("fieldset").find("input");
            var $selects = $(this).closest("fieldset").find("select");
            $inputs.each(function () {
                if (!validator.element(this) && validInput) {
                    validInput = false;
                }
            });
            $selects.each(function () {
                if (!validator.element(this) && validSelect) {
                    validSelect = false;
                }
            });

            if (validInput && validSelect) {
                if ($(this).data("id") == "tab0next" && $("input[type='radio'][name='is_over_18']:checked").val() == "no") {
                    
                    $("#responseDataHolder").html("Please ensure that you are 18 years old and above.");
                    $(".responseHolder").show();
                    $('html, body').animate({
                        'scrollTop': $("#profileForm").position().top
                    });
                    return false;
                }

                $(".responseHolder").hide();
                if ($(this).hasClass("jointShow") && $("input[type='radio'][name='is_joint_application']:checked").val() == "no") {

                    if (next_step) {
                        parent_fieldset.fadeOut(400, function () {
                            $("#loanTab").fadeIn();
                        });
                    }
                     $('html, body').animate({
                        'scrollTop': $("#profileForm").position().top
                    });
                } else if ($(this).data("id") == "tab1next") {
                    if ($("#applicant_id_type").val() == "NZ Drivers License") {
                        parent_fieldset.fadeOut(400, function () {
                            $(this).next().fadeIn();
                        });
                    } else if ($("#applicant_id_type").val() == "NZ Passport" || $("#applicant_id_type").val() == "Overseas Passport") {
                        parent_fieldset.fadeOut(400, function () {
                            $('#applicantPassportUploadTab').fadeIn();
                        });
                    }
                     $('html, body').animate({
                        'scrollTop': $("#profileForm").position().top
                    });

                } else if ($(this).data("id") == "tab7next") {
                    if ($("#jointapp_id_type").val() == "NZ Drivers License") {
                        parent_fieldset.fadeOut(400, function () {
                            $(this).next().fadeIn();
                        });
                    } else if ($("#jointapp_id_type").val() == "NZ Passport" || $("#jointapp_id_type").val() == "Overseas Passport") {
                        parent_fieldset.fadeOut(400, function () {
                            $('#jointAppPassportUploadTab').fadeIn();
                        });
                    }
                     $('html, body').animate({
                        'scrollTop': $("#profileForm").position().top
                    });
                } else if ($(this).data("id") == "tab2next" || $(this).data("id") == "tab3next") {
                    parent_fieldset.fadeOut(400, function () {
                        $("#contactInformationTab").fadeIn();
                    });
                     $('html, body').animate({
                        'scrollTop': $("#profileForm").position().top
                    });
                } else if ($(this).data('id') == "tab8next" || $(this).data('id') == "tab9next") {
                    parent_fieldset.fadeOut(400, function () {
                        $("#jointAppContactInformationTab").fadeIn();
                    });
                     $('html, body').animate({
                        'scrollTop': $("#profileForm").position().top
                    });
                } else {
                    parent_fieldset.fadeOut(400, function () {
                        $(this).next().fadeIn();
                    });
                }

            } else {
                $('html, body').animate({
                    'scrollTop': $("#profileForm").position().top
                });
                return false;
            }


        });

        // previous step
        $('#profileForm .btn-previous').on('click', function () {
            if ($(this).hasClass("jointShowPrevious") && $("input[type='radio'][name='is_joint_application']:checked").val() == "no") {

                $(this).parents('fieldset').fadeOut(400, function () {
                    $('#vehicleTab').fadeIn();
                    //$('ul.steps').find('li.active').removeClass('active').prev('li').addClass('active');
                });
            }
            if ($(this).data('id') == "tab3previous") {
                $(this).parents('fieldset').fadeOut(400, function () {
                    $('#personalInformationTab').fadeIn();
                    //$('ul.steps').find('li.active').removeClass('active').prev('li').addClass('active');
                });
            }
            if ($(this).data('id') == "tab9previous") {
                $(this).parents('fieldset').fadeOut(400, function () {
                    $('#jointApplicationTab').fadeIn();
                    //$('ul.steps').find('li.active').removeClass('active').prev('li').addClass('active');
                });
            } else if ($(this).data('id') == "tab4previous") {
                if ($("#applicant_id_type").val() == "NZ Drivers License") {
                    $(this).parents('fieldset').fadeOut(400, function () {
                        $('#applicantLicenceUploadTab').fadeIn();
                    });
                } else if ($("#applicant_id_type").val() == "NZ Passport" || $("#applicant_id_type").val() == "Overseas Passport") {
                    $(this).parents('fieldset').fadeOut(400, function () {
                        $('#applicantPassportUploadTab').fadeIn();
                    });
                }

            } else if ($(this).data('id') == "tab10previous") {
                if ($("#jointapp_id_type").val() == "NZ Drivers License") {
                    $(this).parents('fieldset').fadeOut(400, function () {
                        $('#jointAppLicenceUploadTab').fadeIn();
                    });
                } else if ($("#jointapp_id_type").val() == "NZ Passport" || $("#jointapp_id_type").val() == "Overseas Passport") {
                    $(this).parents('fieldset').fadeOut(400, function () {
                        $('#jointAppPassportUploadTab').fadeIn();
                    });
                }

            }else if ($(this).data('id') == "tab12previous") {
                if($("input[type='radio'][name='is_joint_application']:checked").val() == "no") {
                    $(this).parents('fieldset').fadeOut(400, function () {
                        $('#vehicleTab').fadeIn();
                        //$('ul.steps').find('li.active').removeClass('active').prev('li').addClass('active');
                    });
                } else {
                    if ($("#jointapp_id_type").val() == "NZ Drivers License") {
                        $(this).parents('fieldset').fadeOut(400, function () {
                            $('#jointAppLicenceUploadTab').fadeIn();
                        });
                    } else if ($("#jointapp_id_type").val() == "NZ Passport" || $("#jointapp_id_type").val() == "Overseas Passport") {
                        $(this).parents('fieldset').fadeOut(400, function () {
                            $('#jointAppPassportUploadTab').fadeIn();
                        });
                    }
                }
            } else {
                $(this).parents('fieldset').fadeOut(400, function () {
                    $(this).prev().fadeIn();
                    //$('ul.steps').find('li.active').removeClass('active').prev('li').addClass('active');
                });
            }
        });

    })//onDocumentReady

    $(function () {
        $('#visa_expiry, #applicant_date_of_birth, #years_at_current_to, #years_at_current_from, #employment_period_from, #employment_period_to, #jointapp_visa_expiry, #jointapp_years_at_current_to, #jointapp_years_at_current_from, #jointapp_applicant_date_of_birth, #jointapp_employment_period_to, #jointapp_employment_period_from, #pay_day, #repayment_start_date').datetimepicker({
            format: 'DD/MM/YYYY'
        });
    });


})(jQuery);


