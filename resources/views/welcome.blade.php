<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Spicy dezyn" />
    <title>SmartCover Loan Application</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- attach CSS styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    <link href="{{ asset('/css/normalize.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/fonts.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/ion.rangeSlider.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet" />
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--<script src="{{ asset('assets/scripts/modernizr.js') }}"></script>-->
    <script src="{{ asset('/js/modernizr-2.6.2.min.js') }}"></script>
    <script src="{{ asset('/js/jspdf.min.js') }}"></script>
    <!-- <script src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script> -->
    <style>
        .help-block {
            color: #a94442;
            font-size: 14px;
            width: 100%;
        }

        .dollar-symbol {
            margin-top: 7px;
            margin-right: 4px;
        }

        .loading {
            position: fixed;
            z-index: 999;
            height: 2em;
            width: 2em;
            overflow: show;
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
        }

        /* Transparent Overlay */
        .loading:before {
            content: '';
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
        }

        /* :not(:required) hides these rules from IE9 and below */
        .loading:not(:required) {
            /* hide "loading..." text */
            font: 0/0 a;
            color: transparent;
            text-shadow: none;
            background-color: transparent;
            border: 0;
        }

        .loading:not(:required):after {
            content: '';
            display: block;
            font-size: 10px;
            width: 1em;
            height: 1em;
            margin-top: -0.5em;
            -webkit-animation: spinner 1500ms infinite linear;
            -moz-animation: spinner 1500ms infinite linear;
            -ms-animation: spinner 1500ms infinite linear;
            -o-animation: spinner 1500ms infinite linear;
            animation: spinner 1500ms infinite linear;
            border-radius: 0.5em;
            -webkit-box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.5) -1.5em 0 0 0, rgba(0, 0, 0, 0.5) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
            box-shadow: rgba(0, 0, 0, 0.75) 1.5em 0 0 0, rgba(0, 0, 0, 0.75) 1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) 0 1.5em 0 0, rgba(0, 0, 0, 0.75) -1.1em 1.1em 0 0, rgba(0, 0, 0, 0.75) -1.5em 0 0 0, rgba(0, 0, 0, 0.75) -1.1em -1.1em 0 0, rgba(0, 0, 0, 0.75) 0 -1.5em 0 0, rgba(0, 0, 0, 0.75) 1.1em -1.1em 0 0;
        }

        /* Animation */

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-moz-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @-o-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                -o-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                -o-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124797986-1"></script>

    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());



        gtag('config', 'UA-124797986-1');
    </script>


</head>

<body>
    <!-- Header -->
    <header class="header_section transition-child full-width bg_white">
        <div class="container">
            <div class="top_menu">
                <ul>
                    <li><a href="https://www.smartcover.co.nz/">Home</a></li>
                    <li><a href="https://www.smartcover.co.nz/faq/">FAQ</a></li>
                    <li><a href="https://www.smartcover.co.nz/schedule-of-fees/">Schedule of Fees</a></li>
                    <li><a href="https://www.smartcover.co.nz/contact-us/">Contact Us</a></li>
                    <li><a href="#">Online Application</a></li>
                </ul>
            </div>
            <div class="act_table">
                <div class="act_tablecell logo">
                    <a href="https://www.smartcover.co.nz/"><img src="/images/logo.jpg" alt="Logo"></a>
                </div>
                <div class="act_tablecell call_sec">
                    <h4><span>Call Us Today</span><a href="tel:0508738765">0508 738 765</a><strong>Free Call</strong></h4>
                </div>
            </div>
        </div>
    </header>
    <!-- /Header -->

    <!-- Main -->
    <div class="main_section full-width">

        <!-- Section Online Form -->
        <section class="onlineForm_section full-width padTB_60 bg_white text-left transition-child">
            <div class="container container_small">
                <div class="text_contain">
                    <h1 class="text-center">Online Application                          
                    <!-- <a href="javascript:void(0)" onclick="demoFromHTML()" class="pull-left">
                                    Click Here to Download the Form</a> -->
                                    </h1>
                    <p>Please complete the following form in full and click submit to apply for Smartcover Finance.</p>
                    <p>A credit check will be carried out as part of the Application process. Please ensure all details you
                        enter are accurate to enable us to correctly assess your application - as quickly as possible. Any
                        inaccurate information could result in delays processing your application.</p>
                    <p>We will be in contact with you soon after to advise if your application has been successful or if we
                        require any further information.</p>
                    <p>Fields marked with * required</p>
                </div>
                <div class="form_sec">
                    <form id="profileForm" name="profileForm" method="post" enctype="multipart/form-data" class="form-horizontal" action="{{ url('profile-form') }}">

                        <fieldset data-step="0">
                            <h3 class="section_head">Getting to Know you<span class="nav_blk"><a href="javascript:void(0)" data-id="tab0next" class="nxt_Tbtn btn-next"></a></span>
                            </h3>
                            <div class="alert alert-info alert-dismissable responseHolder" style="display:none;">
                                <a href="#" class="close" aria-label="close">&times;</a>
                                <p id="responseDataHolder"></p>
                            </div>
                            <div class="form-group">
                                {{ csrf_field() }}
                                <label class="col-xs-12 control-label" for="is_over_18">Are you over 18 years of
                                    age?<sup>*</sup></label>
                                <div class="col-sm-4 col-xs-6 col-op radio">
                                    <label><input type="radio" name="is_over_18" id="is_over_18_1" value="yes" /> Yes
                                        <span class="optmark"></span></label>
                                </div>
                                <div class="col-sm-4 col-xs-6 col-op radio">
                                    <label><input type="radio" name="is_over_18" id="is_over_18_2" value="no" /> No
                                        <span class="optmark"></span></label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="residential_status">Residential status<sup>*</sup></label>
                                    <select class="form-control" name="residential_status" id="residential_status">
                                        <option value="NZ Citizen">NZ Citizen</option>
                                        <option value="NZ Permanent Resident">NZ Permanent Resident</option>
                                        <option value="Work Visa">Work Visa</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-12 mob-margT_20 margT_40 form-inline" id="visaHolder" style="display:none;">
                                    <input type="text" style="width: 200px;" class="form-control input_date" name="visa_expiry" id="visa_expiry" placeholder="DD / MM / YY" /> <label for="visa_expiry">Visa Expiry</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 control-label" for="is_joint_application">Is this a joint
                                    application <sup>*</sup></label>
                                <div class="col-sm-4 col-xs-6 col-op radio">
                                    <label><input type="radio" name="is_joint_application" id="is_joint_application_1" value="yes" /> Yes
                                        <span class="optmark"></span></label>
                                </div>
                                <div class="col-sm-4 col-xs-6 col-op radio">
                                    <label><input type="radio" name="is_joint_application" id="is_joint_application_2" value="no" /> No
                                        <span class="optmark"></span></label>
                                </div>
                            </div>
                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab0next" class="pull-right btn-next main_button">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="1" id="personalInformationTab">
                            <h3 class="section_head">Personal Information <span class="nav_blk"><a href="javascript:void(0)" data-id="tab1previous" class="prv_Tbtn btn-previous"></a><a href="javascript:void(0)" data-id="tab1next" class="nxt_Tbtn btn-next"></a></span></h3>
                            <div class="form-group">
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="applicant_title">Title<sup>*</sup></label>
                                    <select style="width: 120px;" class="form-control" name="applicant_title" id="applicant_title">
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Dr">Dr</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="applicant_gender">Gender<sup>*</sup></label>
                                    <select style="width: 120px;" class="form-control" name="applicant_gender" id="applicant_gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="applicant_first_name">First name<sup>*</sup></label>
                                    <input type="text" class="form-control" name="applicant_first_name" id="applicant_first_name" />
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="applicant_middle_name">Middle name/s</label>
                                    <input type="text" class="form-control" name="applicant_middle_name" name="applicant_middle_name" id="applicant_middle_name" />
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="applicant_surname">Surname<sup>*</sup></label>
                                    <input type="text" class="form-control" name="applicant_surname" id="applicant_surname" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-12" for="applicant_date_of_birth">Date of birth<sup>*</sup></label>
                                <div class="col-md-4">
                                    <select class="form-control col-md-4" name="applicant_birth_date" id="applicant_birth_date">
                                        <option value="">-Date-</option>
                                        @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>

                                    <select class="form-control col-md-4" name="applicant_birth_month" id="applicant_birth_month">
                                        <option value="">-Month-</option>
                                        @foreach($months as $key => $value)
                                        <option value="{{ $value }}">{{ $key }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control col-md-4" name="applicant_birth_year" id="applicant_birth_year">
                                        <option value="">-Year-</option>
                                        @for ($i = date('Y'); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                    </select>
                                </div>
                                
                                {{--<input type="text" class="form-control input_date" name="applicant_date_of_birth" id="applicant_date_of_birth" placeholder="DD / MM / YY"/>--}}
                            </div>
                            <h4>Current Address</h4>
                            <div class="form-group">
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="current_street_number">Street number<sup>*</sup></label>
                                    <input type="text" class="form-control" name="current_street_number" id="current_street_number" />
                                </div>
                                <div class="col-sm-8 col-xs-12">
                                    <label class="control-label" for="current_street_address">Street Address<sup>*</sup></label>
                                    <input type="text" class="form-control" name="current_street_address" id="current_street_address" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="current_suburb">Suburb<sup>*</sup></label>
                                    <input type="text" class="form-control" name="current_suburb" id="current_suburb" />
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="current_city">Town/city<sup>*</sup></label>
                                    <input type="text" class="form-control" name="current_city" id="current_city" />
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="current_postcode">Postcode<sup>*</sup></label>
                                    <input type="text" class="form-control" name="current_postcode" id="current_postcode" />
                                </div>
                            </div>
                            <!-- <div class="form-group">
                            <label class="col-xs-12 control-label" for="years_at_current">Time at this address (Date From)<sup>*</sup></label>
                            <div class="col-sm-6 col-xs-12 form-inline">
                                <input type="text" class="form-control input_date" name="years_at_current_from"
                                       id="years_at_current_from" placeholder="DD / MM / YY"/>
                            </div>
                        </div> -->
                            <div class="form-group">
                                <label class="col-xs-12 control-label" for="current_address_from">Time at this address (Date From)<sup>*</sup></label>
                                <div class="col-md-4">
                                    <select class="form-control col-md-4" name="current_address_from_month" id="current_address_from_month">
                                        <option value="">-Month-</option>
                                        @foreach($months as $key => $value)
                                        <option value="{{ $value }}">{{ $key }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control col-md-4" name="current_address_from_year" id="current_address_from_year">
                                        <option value="">-Year-</option>
                                        @for ($i = date('Y'); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                    </select>
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="applicant_id_type">Type of identification<sup>*</sup></label>
                                    <select class="form-control" name="applicant_id_type" id="applicant_id_type" onchange="toggleIdentificationDetails(this.value)">
                                        <option value="" selected>-select-</option>
                                        <option value="NZ Drivers License">NZ Drivers License</option>
                                        <option value="NZ Passport">NZ Passport</option>
                                        <option value="Overseas Passport">Overseas Passport</option>

                                    </select>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="applicant_marital_status">Marital Status</label>
                                    <select class="form-control" name="applicant_marital_status" id="applicant_marital_status">
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Defacto">Defacto</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="applicant_no_of_dependents">Number of
                                        dependents </label>
                                    <select class="form-control" name="applicant_no_of_dependents" id="applicant_no_of_dependents">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                            </div>
                            <div id="licence_identification" style="display:none">
                                <div class="form-group">
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label" for="licence_number">Licence Number<sup>*</sup></label>
                                        <input type="text" class="form-control" name="licence_number" id="licence_number" />
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label" for="version_number">Version Number<sup>*</sup></label>
                                        <input type="text" class="form-control" name="version_number" id="version_number" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 control-label" for="licence_expiry_year">Licence Expiry Date<sup>*</sup></label>
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="licence_expiry_date" id="licence_expiry_date">
                                            <option value="">-Date-</option>
                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="licence_expiry_month" id="licence_expiry_month">
                                            <option value="">-Month-</option>
                                            @foreach($months as $key => $value)
                                            <option value="{{ $value }}">{{ $key }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="licence_expiry_year" id="licence_expiry_year">
                                            <option value="">-Year-</option>
                                            @for ($i = date('Y', strtotime('+10 years')); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                            <div id="passport_identification" style="display:none">
                                <div class="form-group">
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label" for="passport_number">Passport Number<sup>*</sup></label>
                                        <input type="text" class="form-control" name="passport_number" id="passport_number" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12" for="passport_issue_date">Date Of Issue<sup>*</sup></label>
                                    
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="passport_issue_date" id="passport_issue_date">
                                            <option value="">-Date-</option>
                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                                        <select class="form-control col-md-4" name="passport_issue_month" id="passport_issue_month">
                                            <option value="">-Month-</option>
                                            @foreach($months as $key => $value)
                                            <option value="{{ $value }}">{{ $key }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="passport_issue_year" id="passport_issue_year">
                                            <option value="">-Year-</option>
                                            @for ($i = date('Y'); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12" for="passport_expiry_year">Expiry Date<sup>*</sup></label>
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="passport_expiry_date" id="passport_expiry_date">
                                            <option value="">-Date-</option>
                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                                        <select class="form-control col-md-4" name="passport_expiry_month" id="passport_expiry_month">
                                            <option value="">-Month-</option>
                                            @foreach($months as $key => $value)
                                            <option value="{{ $value }}">{{ $key }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="passport_expiry_year" id="passport_expiry_year">
                                            <option value="">-Year-</option>
                                            @for ($i = date('Y', strtotime('+10 years')); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab1previous" class="pull-left btn-previous main_button ">
                                    Previous</a>
                                <a href="javascript:void(0)" data-id="tab1next" class="pull-right btn-next main_button">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="2" class="file-upload-sec" id="applicantLicenceUploadTab">
                            <h3 class="section_head">Personal Information:File Uploads <span class="nav_blk"><a href="javascript:void(0)" data-id="tab2previous" class="prv_Tbtn btn-previous"></a><a href="javascript:void(0)" data-id="tab2next" class="nxt_Tbtn btn-next"></a></span></h3>
                            <div class="form-group">
                                {{--<div class="col-xs-12 padTB_20">
                                <p><strong>Please Upload your Drivers Licence Front Side</strong><br/>(you can upload a
                                    scanned copy or take a photo to upload)</p>
                                <a href="#" class="main_button photo_btn"><input type="file" accept="image/*" name="applicant_id_front_camera" id="applicant_id_front_camera" capture="camera">Take a Photo</a><span>OR</span>
                            </div>--}}
                                <div class="col-xs-12 padTB_20">

                                    <p><strong>Please Upload your Drivers Licence Front Side</strong><br />(you can upload a
                                        scanned copy or take a photo to upload)</p>
                                    <output id="applicant_id_front_camera_list"></output>
                                    <a href="#" class="main_button photo_btn"><input type="file" data-previewid="applicant_id_front_camera_list" accept="image/*" name="applicant_id_front_camera" id="applicant_id_front_camera" capture="camera">Take a Photo</a></br>
                                    <span style="text-align:center; width:240px;">OR</span>

                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="applicant_id_front_list"></output>
                                            <input class="photo_file1" data-previewid="applicant_id_front_list" accept=".jpg,.png,.gif,.jpeg,.pdf" name="applicant_id_front" id="applicant_id_front" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="/images/nz_licence_sample_f.png" alt="licence front image">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload your Drivers Licence Back Side</strong><br />(you can upload a
                                        scanned copy or take a photo to upload)</p>
                                    <output id="applicant_id_back_camera_list"></output>
                                    <a href="#" class="main_button photo_btn"><input type="file" data-previewid="applicant_id_back_camera_list" accept="image/*" name="applicant_id_back_camera" id="applicant_id_back_camera" capture="camera">Take a Photo</a><span>OR</span>

                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="applicant_id_back_list"></output>
                                            <input class="photo_file2" data-previewid="applicant_id_back_list" accept=".jpg,.png,.gif,.jpeg,.pdf" name="applicant_id_back" id="applicant_id_back" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="/images/nz_licence_sample_b.png" alt="licence front image">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload your Photo</strong><br />(you can upload a scanned copy or take
                                        a selfie to upload)</p>
                                    <output id="applicant_photo_camera_list"></output>
                                    <a href="#" class="main_button photo_btn"><input type="file" data-previewid="applicant_photo_camera_list" accept="image/*" name="applicant_photo_camera" id="applicant_photo_camera" capture="camera">Take a Selfie</a><span>OR</span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="applicant_photo_list"></output>
                                            <input class="photo_file3" data-previewid="applicant_photo_list" accept=".jpg,.png,.gif,.jpeg,.pdf" name="applicant_photo" id="applicant_photo" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="/images/photo_sample.png" alt="Sample photo image">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload a proof of address</strong><br />(bank statement, bills etc with
                                        your name and address on it)<br />*Please make sure your proof of address is dated within 3 months of todays date and that this date is visible.</p>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="applicant_address_proof_list"></output>
                                            <input class="photo_file4" data-previewid="applicant_address_proof_list" accept=".jpg,.png,.gif,.jpeg,.pdf" name="applicant_address_proof" id="applicant_address_proof" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab2previous" class="pull-left btn-previous main_button">
                                    Previous</a>
                                <a href="javascript:void(0)" data-id="tab2next" class="pull-right btn-next main_button">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="3" class="file-upload-sec" id="applicantPassportUploadTab">
                            <h3 class="section_head">Applicant: File Uploads <span class="nav_blk"><a href="javascript:void(0)" data-id="tab3previous" class="prv_Tbtn btn-previous"></a><a href="javascript:void(0)" data-id="tab3next" class="nxt_Tbtn btn-next"></a></span></h3>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload your Passport Page 1</strong><br />(you can upload a scanned
                                        copy or take a photo to upload)</p>
                                    <output id="applicant_passport_id_front_camera_list"></output>
                                    <a href="#" class="main_button photo_btn"><input type="file" data-previewid="applicant_passport_id_front_camera_list" accept="image/*" name="applicant_passport_id_front_camera" id="applicant_passport_id_front_camera" capture="camera">Take a Selfie</a><span>OR</span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="applicant_passport_id_front_list"></output>
                                            <input class="photo_file1" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="applicant_passport_id_front_list" name="applicant_passport_id_front" id="applicant_passport_id_front" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="/images/passport_front_sample.png" alt="licence front image">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload your Passport Page 2</strong><br />(you can upload a scanned
                                        copy or take a photo to upload)</p>
                                    <output id="applicant_passport_id_back_camera_list"></output>
                                    <a href="#" class="main_button photo_btn"><input type="file" accept="image/*" data-previewid="applicant_passport_id_back_camera_list" name="applicant_passport_id_back_camera" id="applicant_passport_id_back_camera" capture="camera">Take a Selfie</a><span>OR</span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="applicant_passport_id_back_list"></output>
                                            <input class="photo_file2" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="applicant_passport_id_back_list" name="applicant_passport_id_back" id="applicant_passport_id_back" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="/images/passport_back_sample.png" alt="licence front image">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload your Photo</strong><br />(you can upload a scanned copy or take
                                        a selfie to upload)</p>
                                    <output id="applicant_passport_photo_camera_list"></output>
                                    <a href="#" class="main_button photo_btn"><input type="file" accept="image/*" data-previewid="applicant_passport_photo_camera_list" name="applicant_passport_photo_camera" id="applicant_passport_photo_camera" capture="camera">Take a Selfie</a><span>OR</span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="applicant_passport_photo_list"></output>
                                            <input class="photo_file3" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="applicant_passport_photo_list" name="applicant_passport_photo" id="applicant_passport_photo" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="/images/photo_sample.png" alt="Sample photo image">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload a proof of address</strong><br />(bank statement, bills et with
                                        your name and address on it)<br />*Please make sure your proof of address is dated within 3 months of todays date and that this date is visible.</p>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="applicant_passport_address_proof_list"></output>
                                            <input class="photo_file4" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="applicant_passport_address_proof_list" name="applicant_passport_address_proof" id="applicant_passport_address_proof" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab3previous" class="pull-left btn-previous main_button">
                                    Previous</a>
                                <a href="javascript:void(0)" data-id="tab3next" class="pull-right btn-next main_button">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="4" id="contactInformationTab">
                            <h3 class="section_head">Contact Information <span class="nav_blk"><a href="javascript:void(0)" data-id="tab4previous" class="prv_Tbtn btn-previous"></a><a href="javascript:void(0)" data-id="tab4next" class="nxt_Tbtn btn-next"></a></span></h3>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="applicant_email">Email<sup>*</sup></label>
                                    <input type="text" class="form-control" name="applicant_email" id="applicant_email" />
                                    <div style="font-size:12px; font-weight:normal;" class="text-justify">Confirmation letter will be sent to you via email after your submit your online authority signup and your loan has been opened and funds disbursed</div>

                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="applicant_mobile">Mobile<sup>*</sup></label>
                                    <input type="text" class="form-control" name="applicant_mobile" id="applicant_mobile" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="applicant_landline">Landline</label>
                                    <input type="text" class="form-control" name="applicant_landline" id="applicant_landline" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="applicant_work_phone">Work</label>
                                    <input type="text" class="form-control" name="applicant_work_phone" id="applicant_work_phone" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="best_time_to_contact">Best Time to contact<sup>*</sup></label>
                                    <select class="form-control col-md-4" name="best_time_to_contact" id="best_time_to_contact">
                                        <option value="">Select Time</option>
                                        <option value="anytime">Anytime</option>
                                        <option value="8am - 12pm">8am - 12pm</option>
                                        <option value="12pm - 5pm">12pm - 5pm</option>
                                        <option value="5pm - 10pm">5pm - 10pm</option>
                                    </select>
                                </div>
                            </div>

                            <h4>Alternative Contact Person Info. (must reside at a different address as the applicant)</h4>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_first_name">Firstname<sup>*</sup></label>
                                    <input type="text" class="form-control" name="referral_first_name" id="referral_first_name" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_surname">Surname<sup>*</sup></label>
                                    <input type="text" class="form-control" name="referral_surname" id="referral_surname" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_street_number">Street number<sup>*</sup></label>
                                    <input type="text" class="form-control" name="referral_street_number" id="referral_street_number" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_street_name">Street name<sup>*</sup></label>
                                    <input type="text" class="form-control" name="referral_street_name" id="referral_street_name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_suburb">Suburb<sup>*</sup></label>
                                    <input type="text" class="form-control" name="referral_suburb" id="referral_suburb" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_city">Town/City<sup>*</sup></label>
                                    <input type="text" class="form-control" name="referral_city" id="referral_city" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_landline">Landline</label>
                                    <input type="text" class="form-control" name="referral_landline" id="referral_landline" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_mobile">Mobile<sup>*</sup></label>
                                    <input type="text" class="form-control" name="referral_mobile" id="referral_mobile" />
                                </div>
                            </div>

                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab4previous" class="pull-left btn-previous main_button">
                                    Previous</a>
                                <a href="javascript:void(0)" id="tab4next" class="pull-right btn-next main_button">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="5">
                            <h3 class="section_head">Employment Details<span class="nav_blk"><a href="javascript:void(0)" data-id="tab5previous" class="prv_Tbtn btn-previous"></a><a href="javascript:void(0)" data-id="tab5next" class="nxt_Tbtn btn-next"></a></span></h3>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="employment_status">Employment status<sup>*</sup></label>
                                    <select name="employment_status" id="employment_status" class="form-control" onchange="toggleEmployeeStatusDiv(this.value)">
                                        <option value="">Select Employment Status</option>
                                        <option value="Full Time Employed">Full Time Employed</option>
                                        <option value="Part Time Employed">Part Time Employed</option>
                                        <option value="Self Employed">Self Employed</option>
                                        <option value="Student">Student</option>
                                        <option value="Beneficiary - Invalid">Beneficiary - Invalid</option>
                                        <option value="Beneficiary - Sickness">Beneficiary - Sickness</option>
                                        <option value="Beneficiary  - DPB">Beneficiary - DPB</option>
                                        <option value="Beneficiary  - Job Seeker">Beneficiary - Job Seeker</option>
                                        <option value="Beneficiary - Not defined">Beneficiary - Not defined</option>
                                        <option value="Pensioner">Pensioner</option>

                                    </select>
                                </div>
                            </div>
                            <div class="employment_status_div" style="display:none">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-12">
                                        <label class="control-label" for="job_title">Job Title</label>
                                        <input type="text" class="form-control" name="job_title" id="job_title" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 control-label" for="duration_of_employment">Have you been in
                                        employment for longer than 3 months?</label>
                                    <div class="col-sm-4 col-xs-6 col-op radio">
                                        <label><input type="radio" name="duration_of_employment" id="duration_of_employment_1" value="yes" /> Yes
                                            <span class="optmark"></span></label>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-op radio">
                                        <label><input type="radio" name="duration_of_employment" id="duration_of_employment_2" value="no" /> No
                                            <span class="optmark"></span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-12">
                                        <label class="control-label" for="employer_name">Employer name</label>
                                        <input type="text" class="form-control" name="employer_name" id="employer_name" />
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <label class="control-label" for="employer_contact_number">Employer contact
                                            number</label>
                                        <input type="text" class="form-control" name="employer_contact_number" id="employer_contact_number" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-12">
                                        <label class="control-label" for="manager_name">Manager</label>
                                        <input type="text" class="form-control" name="manager_name" id="manager_name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 control-label" for="employment_period">Employment Period<sup>*</sup></label>
                                    <div class="col-sm-6 col-xs-12 form-inline">
                                        <input type="text" class="form-control input_date" placeholder="DD / MM / YY" name="employment_period_from" id="employment_period_from" />
                                        <label for="employment_period_from">Start Date</label>
                                    </div>
                                </div>
                            </div>
                            <h3> Income And Expense</h3>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-sm-6 col-xs-12" for="income">Income<sup>*</sup><br><span style="font-size:12px; font-weight:normal;">(no spaces, commas or $ symbols, just numbers)</span></label>
                                <div class="col-sm-6 col-xs-12">
                                    <input type="text" class="form-control " name="income" id="income" placeholder="$">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-6 col-xs-12" for="income_frequency">Income frequency<sup>*</sup></label>
                                <div class="col-sm-6 col-xs-12">
                                    <select name="income_frequency" id="income_frequency" class="form-control">
                                        <option value="Weekly">Weekly</option>
                                        <option value="Fortnightly">Fortnightly</option>
                                        <option value="Monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-6 col-xs-12" for="additional_income">Additional Income<br><span style="font-size:12px; font-weight:normal;">(no spaces, commas or $ symbols, just numbers)</span></label>
                                <div class="col-sm-6 col-xs-12">
                                    <input type="text" class="form-control " name="additional_income" id="additional_income" placeholder="$">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-6 col-xs-12" for="accomodation_type">Accomodation Type</label>
                                <div class="col-sm-6 col-xs-12">
                                    <select name="accomodation_type" id="accomodation_type" class="form-control">
                                        <option value="Mortgage">Mortgage</option>
                                        <option value="Rent">Rent</option>
                                        <option value="Boarding">Boarding</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-6 col-xs-12" for="expense_amount">Expense Amount<br>
                                    <span style="font-size:12px; font-weight:normal;"> (no spaces, commas or $ symbols, just numbers) <br> Monthly total Expenses (loan repayments, utlilities, liabilities)
                                    </span>
                                </label>
                                <div class="col-sm-6 col-xs-12">
                                    <input type="text" class="form-control" name="expense_amount" id="expense_amount" placeholder="$" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-6 col-xs-12" for="expense_frequency">Expense Frequency</label>
                                <div class="col-sm-6 col-xs-12">
                                    <select name="expense_frequency" id="expense_frequency" class="form-control">
                                        <option value="Weekly">Weekly</option>
                                        <option value="Fortnightly">Fortnightly</option>
                                        <option value="Monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>

                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab5previous" class="pull-left btn-previous main_button"> Previous</a>
                                <a href="javascript:void(0)" data-id="tab5next" class="pull-right btn-next main_button">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="6" id="vehicleTab">
                            <h3 class="section_head">Vehicle Details <span class="nav_blk"><a href="javascript:void(0)" data-id="tab6previous" class="prv_Tbtn btn-previous"></a><a href="javascript:void(0)" data-id="tab6next" class="nxt_Tbtn btn-next jointShow"></a></span></h3>

                            <div class="info_sec">
                                <div class="info_block">
                                    <p>Security is required for all loans over $2000 and for mags, tyres, vehicle repairs
                                        and personal loans.Vehicle's must be registered to the person/s applying for finance</p>
                                </div>
                            </div>


                            {{--<div class="form-group">
                            <label class="col-xs-12 control-label" for="is_vehicle_security">Do you want your vehicle to
                                be used as a security?</label>
                            <div class="col-sm-4 col-xs-6 col-op radio">
                                <label><input type="radio" name="is_vehicle_security" id="is_vehicle_security_y"
                                              value="yes"/> Yes
                                    <span class="optmark"></span></label>
                            </div>
                            <div class="col-sm-4 col-xs-6 col-op radio">
                                <label><input type="radio" name="is_vehicle_security" id="is_vehicle_security_n"
                                              value="no"/> No
                                    <span class="optmark"></span></label>
                            </div>
                        </div>--}}
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="vehicle_make">Vehicle make</label>
                                    <input type="text" class="form-control" name="vehicle_make" id="vehicle_make" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="vehicle_model">Vehicle model</label>
                                    <input type="text" class="form-control" name="vehicle_model" id="vehicle_model" />
                                </div>
                            </div>
                            <div class="form-group hideVehicle">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="vehicle_year">Year</label>
                                    <input type="text" class="form-control" name="vehicle_year" id="vehicle_year" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="vehicle_registration">Vehicle Registration</label>
                                    <input type="text" class="form-control" name="vehicle_registration" id="vehicle_registration" />
                                </div>
                            </div>
                            <div class="form-group hideVehicle">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="registered_owner">Registered owner</label>
                                    <input type="text" class="form-control" name="registered_owner" id="registered_owner" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="vehicle_colour">Vehicle color</label>
                                    <input type="text" class="form-control" name="vehicle_colour" id="vehicle_colour" />
                                </div>
                            </div>


                            <div class="checkbox hideVehicle">
                                <label><input type="checkbox" name="vehicle_agreement" value="Vehicle Security - Yes" id="vehicle_agreement">As the registered owner, I give Smartcover Finance permission to use the above
                                    vehicle as a security for my loan.</label>
                            </div>

                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab6previous" class="pull-left btn-previous main_button"> Previous</a>
                                <a href="javascript:void(0)" data-id="tab6next" class="pull-right btn-next main_button jointShow">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="7" id="jointApplicationTab">
                            <h3 class="section_head">Joint Applicant Details<span class="nav_blk"><a href="javascript:void(0)" data-id="tab7previous" class="prv_Tbtn btn-previous"></a><a href="javascript:void(0)" data-id="tab7next" class="nxt_Tbtn btn-next"></a></span></h3>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="jointapp_residential_status">Residential
                                        status<sup>*</sup></label>
                                    <select name="jointapp_residential_status" id="jointapp_residential_status" class="form-control">
                                        <option value="NZ Citizen">NZ Citizen</option>
                                        <option value="NZ Permanent Resident">NZ Permanent Resident</option>
                                        <option value="Work Visa">Work Visa</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-12 mob-margT_20 margT_40 form-inline" style="display: none;" id="jointapp_visaHolder">
                                    <input type="text" style="width: 200px;" class="form-control input_date" id="jointapp_visa_expiry" name="jointapp_visa_expiry" placeholder="DD / MM / YY" /> <label for="jointapp_visa_expiry">Visa
                                        Expiry</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="jointapp_applicant_title">Title<sup>*</sup></label>
                                    <select style="width: 120px;" class="form-control" name="jointapp_applicant_title" id="jointapp_applicant_title">
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Ms">Ms</option>
                                        <option value="Dr">Dr</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="applicant_gender">Gender<sup>*</sup></label>
                                    <select style="width: 120px;" class="form-control" name="jointapp_applicant_gender" id="jointapp_applicant_gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="jointapp_applicant_first_name">First name<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_applicant_first_name" id="jointapp_applicant_first_name" />
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="jointapp_applicant_middle_name">Middle name/s</label>
                                    <input type="text" class="form-control" name="jointapp_applicant_middle_name" id="jointapp_applicant_middle_name" />
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="jointapp_applicant_surname">Surname<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_applicant_surname" id="jointapp_applicant_surname" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-12" for="jointapp_applicant_date_of_birth">Date of birth<sup>*</sup></label>
                                <div class="col-md-4">
                                    <select class="form-control col-md-4" name="jointapp_applicant_birth_date" id="jointapp_applicant_birth_date">
                                        <option value="">-Date-</option>
                                        @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }}</option>
                                            @endfor
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                                    <select class="form-control col-md-4" name="jointapp_applicant_birth_month" id="jointapp_applicant_birth_month">
                                        <option value="">-Month-</option>
                                        @foreach($months as $key => $value)
                                        <option value="{{ $value }}">{{ $key }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control col-md-4" name="jointapp_applicant_birth_year" id="jointapp_applicant_birth_year">
                                        <option value="">-Year-</option>
                                        @for ($i = date('Y'); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                    </select>
                                </div>
                                
                                {{--<input type="text" class="form-control input_date" name="applicant_date_of_birth" id="applicant_date_of_birth" placeholder="DD / MM / YY"/>--}}
                            </div>
                            <h4>Joint Application Current Address</h4>
                            <div class="form-group">
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="jointapp_current_street_number">Street number<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_current_street_number" id="jointapp_current_street_number" />
                                </div>
                                <div class="col-sm-8 col-xs-12">
                                    <label class="control-label" for="jointapp_current_street_address">Street
                                        Address<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_current_street_address" id="jointapp_current_street_address" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="jointapp_current_suburb">Suburb<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_current_suburb" id="jointapp_current_suburb" />
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="jointapp_current_city">Town/city<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_current_city" id="jointapp_current_city" />
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="jointapp_current_postcode">Postcode<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_current_postcode" id="jointapp_current_postcode" />
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <label class="col-xs-12 control-label" for="jointapp_years_at_current">Time at this address (Date From)<sup>*</sup></label>
                                <div class="col-sm-6 col-xs-12 form-inline">
                                    <input type="text" class="form-control input_date" name="jointapp_years_at_current_from" id="jointapp_years_at_current_from" placeholder="DD / MM / YY" />
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="col-xs-12 control-label" for="jointapp_current_address_from_year">Time at this address (Date From)<sup>*</sup></label>
                                <div class="col-md-4">
                                    <select class="form-control col-md-4" name="jointapp_current_address_from_month" id="jointapp_current_address_from_month">
                                        <option value="">-Month-</option>
                                        @foreach($months as $key => $value)
                                        <option value="{{ $value }}">{{ $key }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control col-md-4" name="jointapp_current_address_from_year" id="jointapp_current_address_from_year">
                                        <option value="">-Year-</option>
                                        @for ($i = date('Y'); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="jointapp_id_type">Type of identification<sup>*</sup></label>
                                    <select class="form-control" name="jointapp_id_type" id="jointapp_id_type" onchange="toggleJointAppIdentificationDetails(this.value)">
                                        <option value="">-select-</option>
                                        <option value="NZ Drivers License">NZ Drivers License</option>
                                        <option value="NZ Passport">NZ Passport</option>
                                        <option value="Overseas Passport">Overseas Passport</option>

                                    </select>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="jointapp_marital_status">Marital Status</label>
                                    <select class="form-control" name="jointapp_marital_status" id="jointapp_marital_status">
                                        <option value="Single">Single</option>
                                        <option value="Married">Married</option>
                                        <option value="Defacto">Defacto</option>
                                        <option value="Widowed">Widowed</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-sm-4 col-xs-12">
                                    <label class="control-label" for="jointapp_no_of_dependents">Number of
                                        dependents</label>
                                    <select class="form-control" name="jointapp_no_of_dependents" id="jointapp_no_of_dependents">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                            </div>
                            <div id="jointapp_licence_identification" style="display:none">
                                <div class="form-group">
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label" for="jointapp_licence_number">Licence Number<sup>*</sup></label>
                                        <input type="text" class="form-control" name="jointapp_licence_number" id="jointapp_licence_number" />
                                    </div>
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label" for="jointapp_version_number">Version Number<sup>*</sup></label>
                                        <input type="text" class="form-control" name="jointapp_version_number" id="jointapp_version_number" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 control-label" for="jointapp_licence_expiry_month">Licence Expiry Date<sup>*</sup></label>
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="jointapp_licence_expiry_date" id="jointapp_licence_expiry_date">
                                            <option value="">-Date-</option>
                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="jointapp_licence_expiry_month" id="jointapp_licence_expiry_month">
                                            <option value="">-Month-</option>
                                            @foreach($months as $key => $value)
                                            <option value="{{ $value }}">{{ $key }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="jointapp_licence_expiry_year" id="jointapp_licence_expiry_year">
                                            <option value="">-Year-</option>
                                            @for ($i = date('Y', strtotime('+10 years')); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div id="jointapp_passport_identification" style="display:none">
                                <div class="form-group">
                                    <div class="col-sm-4 col-xs-12">
                                        <label class="control-label" for="jointapp_passport_number">Passport Number<sup>*</sup></label>
                                        <input type="text" class="form-control" name="jointapp_passport_number" id="jointapp_passport_number" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12" for="jointapp_passport_issue_year">Date Of Issue<sup>*</sup></label>
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="jointapp_passport_issue_date" id="jointapp_passport_issue_date">
                                            <option value="">-Date-</option>
                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                                        <select class="form-control col-md-4" name="jointapp_passport_issue_month" id="jointapp_passport_issue_month">
                                            <option value="">-Month-</option>
                                            @foreach($months as $key => $value)
                                            <option value="{{ $value }}">{{ $key }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="jointapp_passport_issue_year" id="jointapp_passport_issue_year">
                                            <option value="">-Year-</option>
                                            @for ($i = date('Y'); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-xs-12" for="">Expiry Date<sup>*</sup></label>
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="jointapp_passport_expiry_date" id="jointapp_passport_expiry_date">
                                            <option value="">-Date-</option>
                                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                                        <select class="form-control col-md-4" name="jointapp_passport_expiry_month" id="jointapp_passport_expiry_month">
                                            <option value="">-Month-</option>
                                            @foreach($months as $key => $value)
                                            <option value="{{ $value }}">{{ $key }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select class="form-control col-md-4" name="jointapp_passport_expiry_year" id="jointapp_passport_expiry_year">
                                            <option value="">-Year-</option>
                                            @for ($i = date('Y', strtotime('+10 years')); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab7previous" class="pull-left btn-previous main_button">
                                    Previous</a>
                                <a href="javascript:void(0)" data-id="tab7next" class="pull-right btn-next main_button">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="8" class="file-upload-sec" id="jointAppLicenceUploadTab">
                            <h3 class="section_head">Joint Applicant: File Uploads <span class="nav_blk"><a href="javascript:void(0)" data-id="tab8previous" class="prv_Tbtn btn-previous"></a><a href="javascript:void(0)" data-id="tab8next" class="nxt_Tbtn btn-next"></a></span>
                            </h3>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload your Drivers Licence Front Side</strong><br />(you can upload a
                                        scanned copy or take a photo to upload)</p>
                                    <output id="jointapp_licence_id_front_camera_list"></output>
                                    <a href="#" class="main_button photo_btn"><input type="file" accept="image/*" data-previewid="jointapp_licence_id_front_camera_list" name="jointapp_licence_id_front_camera" id="jointapp_licence_id_front_camera" capture="camera">Take a Selfie</a><span>OR</span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="jointapp_licence_id_front_list"></output>
                                            <input class="photo_file1" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="jointapp_licence_id_front_list" name="jointapp_licence_id_front" id="jointapp_licence_id_front" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="/images/nz_licence_sample_f.png" alt="licence front image">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload your Drivers Licence Back Side</strong><br />(you can upload a
                                        scanned copy or take a photo to upload)</p>
                                    <output id="jointapp_licence_id_back_camera_list"></output>
                                    <a href="#" class="main_button photo_btn"><input type="file" accept="image/*" name="jointapp_licence_id_back_camera" data-previewid="jointapp_licence_id_back_camera_list" id="jointapp_licence_id_back_camera" capture="camera">Take a Selfie</a><span>OR</span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="jointapp_licence_id_back_list"></output>
                                            <input class="photo_file2" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="jointapp_licence_id_back_list" name="jointapp_licence_id_back" id="jointapp_licence_id_back" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="/images/nz_licence_sample_b.png" alt="licence front image">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload your Photo</strong><br />(you can upload a scanned copy or take
                                        a selfie to upload)</p>
                                    <output id="jointapp_licence_photo_camera_list"></output>
                                    <a href="#" class="main_button photo_btn"><input type="file" accept="image/*" name="jointapp_licence_photo_camera" data-previewid="jointapp_licence_photo_camera_list" id="jointapp_licence_photo_camera" capture="camera">Take a Selfie</a><span>OR</span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="jointapp_licence_photo_list"></output>
                                            <input class="photo_file3" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="jointapp_licence_photo_list" name="jointapp_licence_photo" id="jointapp_licence_photo" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="/images/photo_sample.png" alt="Sample photo image">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload a proof of address</strong><br />(bank statement, bills etc with
                                        your name and address on it)<br />*Please make sure your proof of address is dated within 3 months of todays date and that this date is visible.</p>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="jointapp_licence_address_proof_list"></output>
                                            <input class="photo_file4" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="jointapp_licence_address_proof_list" name="jointapp_licence_address_proof" id="jointapp_licence_address_proof" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab8previous" class="pull-left btn-previous main_button">
                                    Previous</a>
                                <a href="javascript:void(0)" data-id="tab8next" class="pull-right btn-next main_button">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="9" class="file-upload-sec" id="jointAppPassportUploadTab">
                            <h3 class="section_head">Joint Applicant: File Uploads <span class="nav_blk"><a href="javascript:void(0)" data-id="tab9previous" class="prv_Tbtn btn-previous"></a><a href="javascript:void(0)" data-id="tab9next" class="nxt_Tbtn btn-next"></a></span>
                            </h3>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload your Passport Page 1</strong><br />(you can upload a scanned
                                        copy or take a photo to upload)</p>
                                    <output id="jointapp_passport_id_front_camera_list"></output>
                                    <a href="#" class="main_button photo_btn"><input type="file" accept="image/*" name="jointapp_passport_id_front_camera" data-previewid="jointapp_passport_id_front_camera_list" id="jointapp_passport_id_front_camera" capture="camera">Take a Selfie</a><span>OR</span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="jointapp_passport_id_front_list"></output>
                                            <input class="photo_file1" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="jointapp_passport_id_front_list" name="jointapp_passport_id_front" id="jointapp_passport_id_front" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="/images/passport_front_sample.png" alt="licence front image">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload your Passport Page 2</strong><br />(you can upload a scanned
                                        copy or take a photo to upload)</p>
                                    <output id="jointapp_passport_id_front_list"></output>
                                    <a href="#" class="main_button photo_btn"><input type="file" accept="image/*" name="jointapp_passport_id_back_camera" data-previewid="jointapp_passport_id_front_list" id="jointapp_passport_id_back_camera" capture="camera">Take a Selfie</a><span>OR</span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="jointapp_passport_id_back_list"></output>
                                            <input class="photo_file2" accept=".jpg,.png,.gif,.jpeg,.pdf" name="jointapp_passport_id_back" id="jointapp_passport_id_back" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="/images/passport_back_sample.png" alt="licence front image">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload your Photo</strong><br />(you can upload a scanned copy or take
                                        a selfie to upload)</p>
                                    <output id="jointapp_passport_id_front_list"></output>
                                    <a href="#" class="main_button photo_btn"><input type="file" accept="image/*" name="jointapp_passport_photo_camera" data-previewid="jointapp_passport_id_front_list" id="jointapp_passport_photo_camera" capture="camera">Take a Selfie</a><span>OR</span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="jointapp_passport_photo_list"></output>
                                            <input class="photo_file3" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="jointapp_passport_photo_list" name="jointapp_passport_photo" id="jointapp_passport_photo" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <img src="/images/photo_sample.png" alt="Sample photo image">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12 padTB_20">
                                    <p><strong>Please Upload a proof of address</strong><br />(bank statement, bills et with
                                        your name and address on it)<br />*Please make sure your proof of address is dated within 3 months of todays date and that this date is visible.</p>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="wrapper">
                                        <div class="drop">
                                            <div class="cont">
                                                <img src="/images/upload_icon.png" alt="upload icon">
                                                <div class="tit">
                                                    Drag files to upload
                                                </div>
                                                <div class="browse">
                                                    or select files to upload
                                                </div>
                                            </div>
                                            <output id="jointapp_passport_address_proof_list"></output>
                                            <input class="photo_file4" accept=".jpg,.png,.gif,.jpeg,.pdf" name="jointapp_passport_address_proof" data-previewid="jointapp_passport_address_proof_list" id="jointapp_passport_address_proof" type="file" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <p>Files allowed: .pdf, .jpg, .png, .gif<br />Max size: 2MB</p>
                                </div>
                            </div>
                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab9previous" class="pull-left btn-previous main_button">
                                    Previous</a>
                                <a href="javascript:void(0)" data-id="tab9next" class="pull-right btn-next main_button">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="10" id="jointAppContactInformationTab">
                            <h3 class="section_head">JOINT APPLICANT Contact Information <span class="nav_blk"><a href="javascript:void(0)" data-id="tab10previous" class="prv_Tbtn btn-previous"></a><a href="javascript:void(0)" data-id="tab10next" class="nxt_Tbtn btn-next"></a></span></h3>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="applicant_email">Email<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_applicant_email" id="jointapp_applicant_email" />
                                    <div style="font-size:12px; font-weight:normal;" class="text-justify">Confirmation letter will be sent to you via email after your submit your online authority signup and your loan has been opened and funds disbursed</div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="applicant_mobile">Mobile<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_applicant_mobile" id="jointapp_applicant_mobile" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="applicant_landline">Landline</label>
                                    <input type="text" class="form-control" name="jointapp_applicant_landline" id="jointapp_applicant_landline" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="applicant_work_phone">Work</label>
                                    <input type="text" class="form-control" name="jointapp_applicant_work_phone" id="jointapp_applicant_work_phone" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="jointapp_best_time_to_contact">Best Time to contact<sup>*</sup></label>
                                    <select class="form-control col-md-4" name="jointapp_best_time_to_contact" id="jointapp_best_time_to_contact">
                                        <option value="">Select Time</option>
                                        <option value="anytime">Anytime</option>
                                        <option value="8am - 12pm">8am - 12pm</option>
                                        <option value="12pm - 5pm">12pm - 5pm</option>
                                        <option value="5pm - 10pm">5pm - 10pm</option>
                                    </select>
                                </div>
                            </div>

                            <h4>Alternative Contact Person Info (must reside at a different address as the applicant)</h4>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_first_name">Firstname<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_referral_first_name" id="jointapp_referral_first_name" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_surname">Surname<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_referral_surname" id="jointapp_referral_surname" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_street_number">Street number<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_referral_street_number" id="jointapp_referral_street_number" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_street_name">Street name<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_referral_street_name" id="jointapp_referral_street_name" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_suburb">Suburb<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_referral_suburb" id="jointapp_referral_suburb" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_city">Town/City<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_referral_city" id="jointapp_referral_city" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_landline">Landline</label>
                                    <input type="text" class="form-control" name="jointapp_referral_landline" id="jointapp_referral_landline" />
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="referral_mobile">Mobile<sup>*</sup></label>
                                    <input type="text" class="form-control" name="jointapp_referral_mobile" id="jointapp_referral_mobile" />
                                </div>
                            </div>

                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab10previous" class="pull-left btn-previous main_button">
                                    Previous</a>
                                <a href="javascript:void(0)" id="tab10next" class="pull-right btn-next main_button">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="11" id="jointAppEmployeeTab">
                            <h3 class="section_head">Joint Applicant: Employment Details<span class="nav_blk"><a href="javascript:void(0)" data-id="tab11previous" class="prv_Tbtn btn-previous"></a><a href="javascript:void(0)" data-id="tab11next" class="nxt_Tbtn btn-next"></a></span></h3>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="jointapp_employment_status">Employment status<sup>*</sup></label>
                                    <select name="jointapp_employment_status" id="jointapp_employment_status" class="form-control" onchange="toggleJointAppEmployeeStatusDiv(this.value)">
                                        <option value="">Select Employment Status</option>
                                        <option value="Full Time Employed">Full Time Employed</option>
                                        <option value="Part Time Employed">Part Time Employed</option>
                                        <option value="Self Employed">Self Employed</option>
                                        <option value="Student">Student</option>
                                        <option value="Beneficiary - Invalid">Beneficiary - Invalid</option>
                                        <option value="Beneficiary - Sickness">Beneficiary - Sickness</option>
                                        <option value="Beneficiary  - DPB">Beneficiary - DPB</option>
                                        <option value="Beneficiary  - Job Seeker">Beneficiary - Job Seeker</option>
                                        <option value="Beneficiary - Not defined">Beneficiary - Not defined</option>
                                        <option value="Pensioner">Pensioner</option>
                                    </select>
                                </div>
                            </div>
                            <div class="jointapp_employment_status_div" style="display:none">
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-12">
                                        <label class="control-label" for="jointapp_job_title">Job Title</label>
                                        <input type="text" class="form-control" name="jointapp_job_title" id="jointapp_job_title" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 control-label" for="jointapp_duration_of_employment">Have you been
                                        in employment for longer than 3 months?</label>
                                    <div class="col-sm-4 col-xs-6 col-op radio">
                                        <label><input type="radio" name="jointapp_duration_of_employment" id="jointapp_duration_of_employment" value="yes" /> Yes
                                            <span class="optmark"></span></label>
                                    </div>
                                    <div class="col-sm-4 col-xs-6 col-op radio">
                                        <label><input type="radio" name="jointapp_duration_of_employment" id="duration_of_employment_2" value="no" /> No
                                            <span class="optmark"></span></label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-12">
                                        <label class="control-label" for="jointapp_employer_name">Employer name</label>
                                        <input type="text" class="form-control" name="jointapp_employer_name" id="jointapp_employer_name" />
                                    </div>
                                    <div class="col-sm-6 col-xs-12">
                                        <label class="control-label" for="jointapp_employer_contact_number">Employer contact
                                            number</label>
                                        <input type="text" class="form-control" name="jointapp_employer_contact_number" id="jointapp_employer_contact_number" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6 col-xs-12">
                                        <label class="control-label" for="jointapp_manager_name">Manager</label>
                                        <input type="text" class="form-control" name="jointapp_manager_name" id="jointapp_manager_name" />
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="col-xs-12 control-label" for="jointapp_employment_period">Employment Period<sup>*</sup></label>
                                    <div class="col-sm-6 col-xs-12 form-inline">
                                        <input type="text" class="form-control input_date" name="jointapp_employment_period_from" id="jointapp_employment_period_from" placeholder="DD / MM / YY" />
                                        <label for="jointapp_employment_period_from">From</label>
                                    </div>
                                </div>
                            </div>
                            <h3> Income And Expense</h3>
                            <br>
                            <div class="form-group">
                                <label class="control-label col-sm-6 col-xs-12" for="income">Income<sup>*</sup><br><span style="font-size:12px; font-weight:normal;">(no spaces, commas or $ symbols, just numbers)</span></label>
                                <div class="col-sm-6 col-xs-12">
                                    <input type="text" class="form-control" name="jointapp_income" id="jointapp_income" placeholder="$" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-6 col-xs-12" for="jointapp_income_frequency">Income frequency<sup>*</sup></label>
                                <div class="col-sm-6 col-xs-12">
                                    <select name="jointapp_income_frequency" id="jointapp_income_frequency" class="form-control">
                                        <option value="Weekly">Weekly</option>
                                        <option value="Fortnightly">Fortnightly</option>
                                        <option value="Monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-6 col-xs-12" for="jointapp_additional_income">Additional Income<br><span style="font-size:12px; font-weight:normal;">(no spaces, commas or $ symbols, just numbers)</span></label>
                                <div class="col-sm-6 col-xs-12">
                                    <input type="text" class="form-control " name="jointapp_additional_income" id="jointapp_additional_income" placeholder="$">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-6 col-xs-12" for="jointapp_accomodation_type">Accomodation Type</label>
                                <div class="col-sm-6 col-xs-12">
                                    <select name="jointapp_accomodation_type" id="jointapp_accomodation_type" class="form-control">
                                        <option value="Mortgage">Mortgage</option>
                                        <option value="Rent">Rent</option>
                                        <option value="Boarding">Boarding</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-6 col-xs-12" for="jointapp_expense_amount">Expense Amount<br><span style="font-size:12px; font-weight:normal;"> (no spaces, commas or $ symbols, just numbers) <br> Monthly total Expenses (loans,repayments, utlilities, liabilities)</span></label>
                                <div class="col-sm-6 col-xs-12">
                                    <input type="text" class="form-control" name="jointapp_expense_amount" id="jointapp_expense_amount" placeholder="$" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-6 col-xs-12" for="jointapp_expense_frequency">Expense Frequency</label>
                                <div class="col-sm-6 col-xs-12">
                                    <select name="jointapp_expense_frequency" id="jointapp_expense_frequency" class="form-control">
                                        <option value="Weekly">Weekly</option>
                                        <option value="Fortnightly">Fortnightly</option>
                                        <option value="Monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>

                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab11previous" class="pull-left btn-previous main_button">
                                    Previous</a>
                                <a href="javascript:void(0)" id="tab11next" class="pull-right btn-next main_button">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="12" id="loanTab">
                            <h3 class="section_head">Loan Details
                                <span class="nav_blk"><a href="javascript:void(0)" data-id="tab12previous" class="prv_Tbtn btn-previous"></a><a href="javascript:void(0)" data-id="tab12next" class="nxt_Tbtn btn-next"></a></span></h3>
                            <div class="form-group" id="loanSliderHolder">
                                <label class="col-xs-12 control-label">Loan amount<sup>*</sup></label>
                                <div class="col-xs-12">
                                    <!--<input type="hidden" class="slider-input" value="23" />-->
                                    <input type="text" id="js-range-slider" name="loan_amount" value="" />
                                    <input type="text" disabled id="js-input" name="range_out" value="" /><span class="dollar-symbol pull-right">$</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-xs-12 control-label" for="is_over_18">Do you need a custom amount<sup>*</sup></label>
                                <div class="col-sm-4 col-xs-6 col-op radio">
                                    <label><input type="radio" name="need_custom_amount" id="need_custom_amount_1" value="yes" /> Yes
                                        <span class="optmark"></span></label>
                                </div>
                                <div class="col-sm-4 col-xs-6 col-op radio">
                                    <label><input type="radio" name="need_custom_amount" id="need_custom_amount_2" value="no" /> No
                                        <span class="optmark"></span></label>
                                </div>
                            </div>
                            <div class="form-group" id="loanAmountHolder" style="display: none;">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="other_loan_amount">Custom Amount (no spaces, commas or $ symbols, just numbers)</label>
                                    <input type="text" class="form-control" name="other_loan_amount" id="other_loan_amount" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="loan_reason">Loan Reason<sup>*</sup></label>
                                    <select name="loan_reason" id="loan_reason" class="form-control">
                                        <option value="Vetcare">Vetcare</option>
                                        <option value="Car Repairs">Car Repairs</option>
                                        <option value="Tyres">Tyres</option>
                                        <option value="Medical/ Heathcare">Medical/ Heathcare</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="loan_agent">Name of Store (if any)</label>
                                    <input type="text" class="form-control" name="loan_agent" id="loan_agent" />
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="preffered_week_day">Preferred Week Day of payment</label>
                                    <select name="preffered_week_day" id="preffered_week_day" class="form-control">

                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>

                                    </select>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="repayment_frequency">Preferred Frequency</label>
                                    <select name="repayment_frequency" id="repayment_frequency" class="form-control">
                                        <option value="Weekly">Weekly</option>
                                        <option value="Fortnightly">Fortnightly</option>
                                        <option value="Monthly">Monthly</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="pay_day">Next Income Payday</label>
                                    <input type="text" style="width: 200px;" class="form-control input_date" name="pay_day" id="pay_day" placeholder="DD / MM / YY" />
                                </div>
                            </div> -->
                            <div class="form-group">
                                <label class="col-xs-12 control-label" for="payment_type">Payment Type<sup>*</sup>
                                <br>
                                <div style="font-size:12px; font-weight:normal;" class="text-justify">SmartCover Finance requires that customers repay their loan by either Automatic payment or Direct debit. Please select one of the options below:</div>
                                </label>
                                
                                <div class="col-sm-12 col-xs-12 col-op radio">
                                    <label><input type="radio" name="payment_type" id="payment_type_direct_debit" value="Direct Debit" /> Direct Debit
                                        <span class="optmark"></span></label>
                                </div>
                                <div class="col-sm-12 col-xs-12 col-op radio">
                                    <label><input type="radio" name="payment_type" id="payment_type_automatic_debit" value="Automatic Payment" /> Automatic Payment
                                        <span class="optmark"></span></label>
                                </div>
                                <div class="col-sm-12 col-xs-12 col-op radio">
                                    <label><input type="radio" name="payment_type" id="payment_type_standard_direct_debit" value="Request a standard Direct Debit Form" /> Request a standard Direct Debit Form
                                        <span class="optmark"></span></label>
                                </div>
                            </div>
                            <div class="info_sec">
                                <div class="info_block">
                                    <p>Smartcover Finance can send you a digital copy of your loan agreement to read and sign via Secured signing. To Opt out of this service please tick below.</p>
                                </div>
                            </div>

                            <div class="checkbox">
                                <label><input type="checkbox" name="secure_sign_agreed" value="Secure Signing" id="secure_sign_agreed">Opt out of Secured Signing</label>
                            </div>

                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab12previous" class="pull-left btn-previous main_button">
                                    Previous</a>
                                <a href="javascript:void(0)" data-id="tab12next" class="pull-right btn-next main_button">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="13" id="loanRepaymentTab">
                            <h3 class="section_head">Loan Repayments
                                <span class="nav_blk">
                                    <a href="javascript:void(0)" data-id="tab13previous" class="prv_Tbtn btn-previous jointShowPrevious"></a>
                                    <a href="javascript:void(0)" data-id="tab12next" class="nxt_Tbtn btn-next"></a></span></h3>
                            <h5>Your Bank Account Details</h5>
                            <div class="form-group">
                                <div><label class="control-label" for="repayment_bank_account_number">Bank Account Number<sup>*</sup></label>
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" maxlength="2" name="repayment_bank_account_number1" id="repayment_bank_account_number1">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" maxlength="4" name="repayment_bank_account_number2" id="repayment_bank_account_number2">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" maxlength="7" name="repayment_bank_account_number3" id="repayment_bank_account_number3">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" maxlength="3" name="repayment_bank_account_number4" id="repayment_bank_account_number4">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 col-xs-12">
                                    <label class="control-label" for="repayment_bank_account_name">Account Name<sup>*</sup></label>
                                    <input type="text" class="form-control" name="repayment_bank_account_name" id="repayment_bank_account_name" />
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="repayment_bank_authorization" value="Verified" id="repayment_bank_authorization">
                                            I am authorized to operate this bank account independently.</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 col-xs-12">
                                    <label class="control-label" for="repayment_authorizer_name">Name of the Authorizer<sup>*</sup></label>
                                    <input type="text" class="form-control" name="repayment_authorizer_name" id="repayment_authorizer_name" />
                                    <div style="font-size:12px; font-weight:normal;" class="text-justify">It’s a legal requirement that you must be the named bank account holder or have formal authority to operate the bank account independently so you can set up a direct debit. If you are not authorized to operate this bank account, you can call us on 0508 738 765 to request a direct debit form or contact us to arrange alternative payment arrangements.</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="repayment_start_date">Payment Start Date<sup>*</sup></label>
                                    <input type="text" class="form-control input_date" placeholder="DD / MM / YY" name="repayment_start_date" id="repayment_start_date" />
                                    <span style="font-size:12px; font-weight:normal;"> (select from the available dates for when you'd like your payments to start)</span>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label" for="repayment_frequency">Preferred Frequency<sup>*</sup></label>
                                    <select name="repayment_frequency" id="repayment_frequency" class="form-control">
                                        <option value="Weekly">Weekly</option>
                                        <option value="Fortnightly">Fortnightly</option>
                                        <option value="Monthly">Monthly</option>
                                    </select>
                                    <span style="font-size:12px; font-weight:normal;"> Your payments will be taken on the same day each week, fortnight or month, or as close to as possible.</span>
                                </div>
                            </div>

                            <div class="info_sec">
                                <div class="info_block">
                                    <p class="text-justify"><b>Please note:</b> The start date you choose may alter depending on when the contract is signed and loan process is complete. A full telephone disclosure will take place before the contract is finalized to discuss the payment schedule and direct debit confirmation letter will be sent to the email address supplied once the loan has been opened.</p>
                                </div>
                            </div>
                            <br>
                            <div class="checkbox">
                                <label class="text-justify"><input type="checkbox" name="repayment_authorization" value="Verified" id="repayment_authorization">
                                    I agree to the <a href="#" data-toggle="modal" data-target="#terms_and_conditions_modal">direct debit terms and conditions</a>. I authorize Smartcover Finance to process direct debits to my nominated account, and
                                    I authorize my bank to accept these payments. I’m aware that I can contact Smartcover Finance on 0508 738 765 to change/cancel my payment method at any time. *</label>
                            </div>
                            <br>
                            <div class="form-group">
                                <div class="col-sm-12 col-xs-12">
                                    <div style="font-size:12px; font-weight:normal;" class="text-justify"> *Direct Debit Disputes: The Direct Debit Terms and Conditions set out the responsibilities of each party and explain the process for any disputed transactions. If you have any questions about your payments, or wish to change or cancel these direct debit instructions, please contact us on 0508 738 765</div>
                                </div>
                            </div>
                            <!-- <div class="form-group">
                                <a href="javascript:void(0)" onclick="demoFromHTML()" class="pull-left">
                                    Click Here to Download the Form</a>
                            </div> -->
                            <div class="nav_sec">
                                <a href="javascript:void(0)" data-id="tab13previous" class="pull-left btn-previous main_button jointShowPrevious">
                                    Previous</a>
                                <a href="javascript:void(0)" data-id="tab13next" class="pull-right btn-next main_button">Next</a>
                            </div>
                        </fieldset>
                        <fieldset data-step="14" id="privacyWaiverTab">
                            <h3 class="section_head">Privacy Waiver<span class="nav_blk"><a href="javascript:void(0)" data-id="tab14previous" class="prv_Tbtn btn-previous"></a></span>
                            </h3>
                            <div class="alert alert-danger" id="alertHolder" style="display:none;">
                                <p>In order to proceed please accept the Privacy Waiver.</p>
                            </div>
                            <div class="content_section using_listStyle text-justify" id="privacy_act">
                                <h3>The Privacy Waiver act 1993</h3>
                                <p>I/we authorise Smartcover Finance to collect, retain and use the personal information
                                    about me/us for the purpose of:</p>

                                <ul>
                                    <li>Assessing my/our credit worthiness;</li>
                                    <li>Attending to the financing, whether directly or indirectly, of my/our contract(s)
                                        and enforcing Smartcovers rights thereunder;
                                    </li>
                                    <li>Marketing and/or informing me/us about the goods and services provided by
                                        Smartcover
                                    </li>
                                </ul>
                                <p> I/we authorise Smartcover to collect from</p>
                                <ul>
                                    <li>credit reporting agencies, credit providers, my/our employer(s), accountant(s),
                                        relatives, or other person(s) such personal, financial and commercial information
                                        about me/us for the said purposes.
                                    </li>
                                </ul>
                                <p>I/we authorise Smartcover to provide this information:</p>
                                <ul>
                                    <li>To any person for the foregoing purposes;</li>
                                    <li>To any employees and agents of Smartcover and/or any other person, in any ordinary
                                        course of business, for any of the foregoing purposes;
                                    </li>
                                    <li> To credit agencies for the purpose of maintaining proper or effective records.</li>
                                </ul>
                                <p>I/we acknowledge that if I/we do not provide all or any part of the information requested
                                    on this application form, my/our application for finance may be declined. I/we further
                                    acknowledge that pursuant to the Privacy Act 1993, I/we have a right of access to
                                    information collected by Smartcover about me/us and to request that this information be
                                    corrected.</p>
                                <p>The information will be held at the office of Smartcover Finance Limited, 3-2E Ceres
                                    Court, Albany, Auckland or the registered offices of any party nominated by Smartcover
                                    Finance Limited. * Smartcover Finance Limited and other associated third parties.</p>

                                <h4>Privacy Act Acceptance</h4>
                                <p>I accept the terms and conditions as set out above</p>
                            </div>

                            <div class="checkbox privacy_agreement">
                                <label><input type="checkbox" name="privacy_act_agreement" value="Privacy Check" id="privacy_act_agreement">I confirm that I have read and understood the
                                    document before proceeding.</label>
                            </div>

                            <div class="nav_sec">
                                <a href="javascript:void(0)"data-id="tab14previous" class="pull-left btn-previous main_button"> Previous</a>
                                <!--<button type="submit" class="pull-right" name="online_application_submit" id="online_application_submit">Submit</button>-->
                                <input type="submit" value="Complete" class="pull-right" name="online_application_submit" id="online_application_submit">
                            </div>
                        </fieldset>
                        <!--<h3>Finish</h3>
                    <section data-step="3">

                    </section>-->
                    </form>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div id="terms_and_conditions_modal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Debit Terms And Conditions</h4>
                    </div>
                    <div class="modal-body">
                        <div class="content_section using_listStyle text-justify">
                            <h3>Specific conditions relating to notices and disputes</h3>
                            <p>Smartcover Finance Limited (the initiator) may only send a direct debit if I (the acceptor) have:</p>
                            <ul>
                                <li>Asked the initiator to send it, and</li>
                                <li>Agreed to the amount of the direct debit</li>
                            </ul>
                            <p>Smartcover Finance Limited is required to give written notice of the amount and date of each direct debit no later than the date of the debit.</p>
                            <p>Smartcover Finance Limited is required to give a written notice of the amount and date of each direct debit in a series of direct debits no later than 10 calendar days before the date of the first direct debit in the series. The notice is to include:</p>
                            <ul>
                                <li>The dates of the debits, and</li>
                                <li>The amount of each direct debit</li>
                            </ul>
                            <p>
                                If Smartcover Finance Limited proposes a change to an amount and/or date of a direct debit specified in the notice Smartcover Finance Limited is required to give me notice no later than 10 calendar days before the change.
                            </p>
                            <p>
                                I may ask my bank to reverse a direct debit up to 120 calendar days after the debit if:
                            </p>
                            <ul>
                                <li>
                                    I don’t receive a written notice of the amount and date of each direct debit from Smartcover Finance Ltd or
                                </li>
                                <li>I receive a written notice but the amount or the date of debiting is different from the amount or the date specified on the notice.</li>
                            </ul>
                            <p>If the bank dishonours a direct debit, Smartcover Finance Limited may attempt to retake the amount from my bank account within five business days without further notice.</p>
                            <p>I may ask my bank to receive a direct debit up to nine months after the date Smartcover Finance Limited sends the first direct debit under the authority, if I am not reasonably satisfied that the authority authorized my bank to debit my account with the amount of the direct debit.</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <!-- /Section Online Form -->
        <div id="jspdf_div" style="display:none">
            <h3 class="section_head">Loan Repayments
            </h3>
            <h5>Your Bank Account Details</h5>
            <div class="form-group">
                <div><label class="control-label" for="">Bank Account Number<sup>*</sup></label>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="" maxlength="2">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" maxlength="4">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" maxlength="7">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" maxlength="3">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 col-xs-12">
                    <label class="control-label">Account Name<sup>*</sup></label>
                    <input type="text" class="form-control" />
                    <div class="checkbox">
                        <label><input type="checkbox" value="Privacy Check">
                            I am authorized to operate this bank account independently.</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12 col-xs-12">
                    <label class="control-label">Name of the Authorizer<sup>*</sup></label>
                    <input type="text" class="form-control" />
                    <!-- <span>It’s a legal requirement that you must be the named bank account holder or have formal authority to operate the bank account independently so you can set up a direct debit. If you are not authorized to operate this bank account, <br>you can call us on 0508 738 765 to request a direct debit form or contact us to arrange alternative payment arrangements.</span> -->
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 col-xs-12">
                    <label class="control-label" for="repayment_start_date">Payment Start Date<sup>*</sup></label>
                    <input type="text" />
                    <!-- <span style="font-size:12px; font-weight:normal;"> (select from the available dates for when you'd like your payments to start)</span> -->
                </div>
                <div class="col-sm-6 col-xs-12">
                    <label class="control-label" for="repayment_frequency">Preferred Frequency<sup>*</sup></label>
                    <input type="text" />
                    <!-- <span style="font-size:12px; font-weight:normal;"> Your payments will be taken on the same day each week, fortnight or month, or as close to as possible.</span> -->
                </div>
            </div>

            <!-- <div class="info_sec">
                <div class="info_block">
                    <p>The start date you choose may alter depending on when the contracting is signed, and loan process is completed. A full telephone disclousure will take place before the finalized is discuss the payment schedule and direct debit confirmation letter will be sent to the postal address supplied once the loan has been opened.</p>
                </div>
            </div> -->
            <br>
            <!-- <div class="checkbox">
                <label><input type="checkbox" value="Privacy Check">
                    I agree to the direct debit terms and conditions. I authorize Smartcover Finance to process direct debits to my nominated account, and
                    I authorize my bank to accept these payments. I’m aware that I can contact Smartcover Finance on 0508 738 765 to change/cancel my payment method at any time. *</label>
            </div> -->
            <br>
            <div class="form-group">
                <div class="col-sm-12 col-xs-12">
                    <!-- <span style="font-size:12px; font-weight:normal;"> *Direct Debit Disputes: The Direct Debit Terms and Conditions set out the responsibilities of each party and explain the process for any disputed transactions. If you have any questions about your payments, or wish to change or cancel these direct debit instructions, please contact us on 0508 738 765</span> -->
                </div>
            </div>
        </div>
    </div>
    <!-- /Main -->

    <!-- Footer -->
    <footer class="footer_section transition-child full-width bg_grey padTB_45">
        <div class="footer_top">
            <div class="container">
                <ul>
                    <li><a href="https://www.smartcover.co.nz/">Home</a></li>
                    <li><a href="https://www.smartcover.co.nz/?page_id=36">Agent Locator</a></li>
                    <li><a href="https://www.smartcover.co.nz/faq/">FAQ</a></li>
                    <li><a href="https://www.smartcover.co.nz/schedule-of-fees/">Schedule of Fees</a></li>
                    <li><a href="https://www.smartcover.co.nz/contact-us/">Contact Us</a></li>
                    <li>
                        <a href="http://s3-ap-southeast-2.amazonaws.com/wh1.thewebconsole.com/wh/4662/images/TERMS-AND-CONDITIONS.pdf">Terms
                            & Conditions</a></li>
                    <li><a href="#">Online Application</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <div id="loader" class="loading" style="display:none;"></div>
    <!-- /Footer -->

    <!-- attach JavaScripts -->
    <script src="{{ asset('/js/jquery-1.12.5.js') }}"></script>
    <script src="{{ asset('/js/jquery-validation.min.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/js/moment.js') }}"></script>
    <script src="{{ asset('/js/bootstrap-datetimepicker.js') }}"></script>
    <script src="{{ asset('/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('/js/js.js?v=1.7') }}"></script>
    <script src="{{ asset('/js/newjs.js?v=1.7') }}"></script>

</body>

</html>