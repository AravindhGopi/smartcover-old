function toggleIdentificationDetails(value){
    if(value != ""){
        if(value=="NZ Drivers License"){
            $("#licence_identification").show()
            $("#passport_identification").hide()
        }else{
            $("#passport_identification").show()
            $("#licence_identification").hide()
        }
    }else{
        alert("Please an identification")
    }
}

function toggleEmployeeStatusDiv(value){
    if(value == "Full Time Employed" || value =="Part Time Employed"){
        $(".employment_status_div").show();
    }else{
        $(".employment_status_div").hide();
    }
}
function toggleJointAppIdentificationDetails(value){
    if(value != ""){
        if(value=="NZ Drivers License"){
            $("#jointapp_licence_identification").show()
            $("#jointapp_passport_identification").hide()
        }else{
            $("#jointapp_passport_identification").show()
            $("#jointapp_licence_identification").hide()
        }
    }else{
        alert("Please an identification")
    }
}

function toggleJointAppEmployeeStatusDiv(value){
    if(value == "Full Time Employed" || value =="Part Time Employed"){
        $(".jointapp_employment_status_div").show();
    }else{
        $(".jointapp_employment_status_div").hide();
    }
}