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

function demoFromHTML() {
    var pdf = new jsPDF('p', 'pt', 'letter');
    // source can be HTML-formatted string, or a reference
    // to an actual DOM element from which the text will be scraped.
    source = jQuery('#jspdf_div').html()

    // we support special element handlers. Register them with jQuery-style 
    // ID selector for either ID or node name. ("#iAmID", "div", "span" etc.)
    // There is no support for any other type of selectors 
    // (class, of compound) at this time.
    specialElementHandlers = {
        // element with id of "bypass" - jQuery style selector
        '#bypassme': function (element, renderer) {
            // true = "handled elsewhere, bypass text extraction"
            return true
        }
    };
    margins = {
        top: 80,
        bottom: 60,
        left: 40,
        width: 522
    };
    // all coords and widths are in jsPDF instance's declared units
    // 'inches' in this case
    pdf.fromHTML(
    source, // HTML string or DOM elem ref.
    margins.left, // x coord
    margins.top, { // y coord
        'width': margins.width, // max width of content on PDF
        'elementHandlers': specialElementHandlers
    },

    function (dispose) {
        // dispose: object with X, Y of the last line add to the PDF 
        //          this allow the insertion of new lines after html
        pdf.save('Test.pdf');
    }, margins);
}