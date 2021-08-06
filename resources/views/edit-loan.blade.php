<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="csrf-token" content="{{ csrf_token() }}">
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

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
  <style>
    .loan_number {
      background-color: #65a73b;
      border-color: #65a73b;
      color: #fff !important;
      padding: 2px;
      border-radius: 5px;
    }

    .search_loan_btn {
      background-color: #65a73b;
      border-radius: 5px;
      background: #65a73b !important;
      color: #fff;
      /* border-color: #ffff; */
      border: 2px solid #fff;
    }

    .search_loan_btn_inverse {
      border-radius: 5px;
      background: #fff !important;
      color: #65a73b;
      /* border-color: #ffff; */
      border: 2px solid #65a73b;
    }
  </style>
</head>

<body>
  <!-- Header -->
  <header class="header_section transition-child full-width bg_white">
    <div class="container">
      <div class="top_menu">
        <ul>
          <li>
            <a href="https://www.smartcover.co.nz/">Home</a>
          </li>
          <li>
            <a href="https://www.smartcover.co.nz/faq/">FAQ</a>
          </li>
          <li>
            <a href="https://www.smartcover.co.nz/schedule-of-fees/">Schedule of Fees</a>
          </li>
          <li>
            <a href="https://www.smartcover.co.nz/contact-us/">Contact Us</a>
          </li>
        </ul>
      </div>
      <div class="act_table">
        <div class="act_tablecell logo">
          <a href="https://loans.smartcover.co.nz/">
            <img src="images/smartcover_logo.png" alt="Logo">
          </a>
        </div>
        <div class="act_tablecell call_sec">
          <h4>
            <a href="tel:0508738765">
              <i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp;0508 738 765 </a>
          </h4>
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
        <div>
          <h3 style="color:red;font-weight:bold;text-align:center">This is testing application.</h3>
        </div>
        <div class="wizard">
          <div class="wizard-inner">
            <div class="connecting-line"></div>
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" data-original-title="Step 1" aria-expanded="true">
                  <span class="round-tab"> 1 </span>
                </a>
              </li>
              <li role="presentation" class="disabled">
                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" data-original-title="Step 2" aria-expanded="false">
                  <span class="round-tab"> 2 </span>
                </a>
              </li>
              <li role="presentation" class="disabled">
                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" data-original-title="Step 3" aria-expanded="false">
                  <span class="round-tab"> 3 </span>
                </a>
              </li>
              <li role="presentation" id="presentation4" class="disabled">
                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" data-original-title="Step 4" aria-expanded="false">
                  <span class="round-tab"> 4 </span>
                </a>
              </li>
              <li role="presentation5" id="presentation5" class="disabled">
                <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab" data-original-title="Step 5" aria-expanded="false">
                  <span class="round-tab" id="jointabs"> 5 </span>
                </a>
              </li>
              <li role="presentation6" id="presentation6" class="disabled">
                <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab" data-original-title="Step 6" aria-expanded="false">
                  <span class="round-tab" id="vehicetabs"> 6 </span>
                </a>
              </li>
              <li role="presentation" class="disabled">
                <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab" data-original-title="Step 7" aria-expanded="false">
                  <span class="round-tab" id="loantabs"> 7 </span>
                </a>
              </li>
              <li role="presentation" class="disabled">
                <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab" data-original-title="Step 8" aria-expanded="false">
                  <span class="round-tab" id='lasttabs'> 8 </span>
                </a>
              </li>
            </ul>
          </div>
          <div class="text_contain">
            <h1 class="text-center">Online Application
              <!-- <a href="javascript:void(0)" onclick="demoFromHTML()" class="pull-left">
                                    Click Here to Download the Form</a> -->
            </h1>
          </div>
          <div class="row">
            <form action="{{url('search_loan')}}" method="post" id="search_loan_forn">

              <div class="form-group">
                <div class="col-xs-8 col-md-8">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                  <input type="text" id="loan_number_search" name="loan_number_search" placeholder="Enter Loan Number" style="margin-right: 5px !important">
                  <button type="button" class="search_loan_btn" onclick="searchLoan()" style="margin-right: 5px !important">Search</button>
                  <button type="button" class="search_loan_btn_inverse" onclick="newLoan()">New</button>
                </div>
              </div>
            </form>

            <div class="col-xs-4 col-md-4 text-right" style="padding-bottom: 5px;padding-right: 22px;">
              <span class="loan_number" id="loan_number_display" style="display: ">Loan Number : <span id="loan_number_from_db">{{$data['loan'][0]->loan_number}}</span></span>
            </div>

          </div>
          <div class="form_sec">
            <form id="profileForm" name="profileForm" method="post" enctype="multipart/form-data" class="form-horizontal" action="{{ url('profile-form') }}">
              {{ csrf_field() }}
              <div class="tab-content">
                <div class="tab-pane active" role="tabpanel" id="step1">
                  <fieldset data-step="0" id="firstset">
                    <!-- <div class="nav_sec">
                      <a href="javascript:void(0)" data-id="tab0next" class="pull-right  btn-next main_button">Next</a>
                    </div> -->
                    <div class="form-group">
                      <div class="col-xs-12 col-md-12">
                        <div class="loansliderholder">
                          <span></span>
                          <h4>How much amount do you need?</h4>
                          <div class="rangeslider-wrap">
                            <input type="range" min="500" max="15000" step="100" labels="" id="loan_amount" name="loan_amount">
                          </div>
                          <div class="range">
                            <small class="min pull-left">$500</small>
                            <small class="max pull-right">$15,000</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <label for="specific_amount" onclick="showloan()" class="col-xs-12 green_color">+ Do you need a specific amount?</label>
                    <div class="form-group">

                      <div class="col-xs-12 col-md-12" id="loanAmountHolder" style="display: none;">
                        <input type="text" name="other_loan_amount" id="other_loan_amount" placeholder="Amount">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="loan_reason" class="col-xs-12">Purpose of loan?<sup>*</sup></label>
                      {{$data['loan'][0]->applicant_date_of_birth }}
                      <div class="col-xs-12 col-md-12">
                        <select name="loan_reason" id="loan_reason" required>
                          <option value="">Please Select</option>
                          <option value="Automotive repairs" {{ ($data['loan'][0]->loan_reason == "Automotive repairs") ? 'selected' : '' }}>Automotive repairs</option>
                          <option value="Mags and tyres" {{ ($data['loan'][0]->loan_reason == "Mags and tyres") ? 'selected' : ''}}>Mags and tyres</option>
                          <option value="Personal loan" {{ ($data['loan'][0]->loan_reason == "Personal loan") ? 'selected' : ''}}>Personal loan</option>
                          <option value="Veterinary care" {{ ($data['loan'][0]->loan_reason == "Veterinary care") ? 'selected' : ''}}>Veterinary care</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="loan_category" class="col-xs-12">Category<sup>*</sup></label>
                      <div class="col-xs-12 col-md-12">
                        <select name="loan_category" id="loan_category" required>
                          <option value="">Please Select</option>
                          @foreach ($data['categories'] as $category)
                          <option value="{{$category->id}}" {{ ($data['loan'][0]->category_id == $category->id) ? 'selected' : ''}} >{{$category->category_name}}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="loan_agent" class="col-xs-12">Name of store</label>
                      <div class="col-xs-12 col-md-12">
                        <select name="loan_agent" id="loan_agent" required>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-md-12">
                        <h4>Personal Info</h4>
                        <div class="personal_info">
                          <div class="radio-toolbar">
                            <p>Title</p>
                            <input type="radio" id="mr" name="applicant_title" value="Mr" checked>
                            <label for="mr">Mr</label>
                            <input type="radio" id="mrs" name="applicant_title" value="Mrs">
                            <label for="mrs">Mrs</label>
                            <input type="radio" id="miss" name="applicant_title" value="Miss">
                            <label for="miss">Miss</label>
                            <input type="radio" id="ms" name="applicant_title" value="Ms">
                            <label for="ms">Ms</label>
                            <input type="radio" id="other" name="applicant_title" value="Other">
                            <label for="other">Other</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group input_pad">
                      <div class="col-xs-12 col-md-12">
                        <input type="text" id="applicant_first_name" value="{{ $data['loan'][0]->applicant_first_name }}" name="applicant_first_name" placeholder="First Name *" required>
                      </div>
                    </div>
                    <div class="form-group input_pad">
                      <div class="col-xs-12 col-md-12">
                        <input type="text" id="applicant_middle_name" value="{{ $data['loan'][0]->applicant_middle_name }}" name="applicant_middle_name" placeholder="Middle Name(s) (optional)">
                      </div>
                    </div>
                    <div class="form-group input_pad">
                      <div class="col-xs-12 col-md-12">
                        <input type="text" id="applicant_surname" value="{{ $data['loan'][0]->applicant_surname }}" name="applicant_surname" placeholder="Last Name *" required>
                      </div>
                    </div>
                    <div class="form-group input_pad">
                      <div class="col-xs-12 col-md-12">
                        <input type="text" id="applicant_mobile" value="{{ $data['loan'][0]->applicant_mobile }}" name="applicant_mobile" placeholder="Mobile *" required>
                      </div>
                    </div>
                    <div class="form-group input_pad">
                      <div class="col-xs-12 col-md-12">
                        <input type="text" id="applicant_email"  value="{{ $data['loan'][0]->applicant_email }}" name="applicant_email" placeholder="Email Address *" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 col-md-12">
                        <h4>Is this a joint Application? <sup>*</sup>
                        </h4>
                        <div class="joint_application">
                          <div class="radio-toolbar">
                            <p>Title</p>
                            <input type="radio" id="is_joint_application_1" class="joint_app_Selection" name="is_joint_application" value="yes">
                            <label for="is_joint_application_1">Yes</label>
                            <input type="radio" id="is_joint_application_2" class="joint_app_Selection" name="is_joint_application" value="no">
                            <label for="is_joint_application_2">No</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="j_app_form" id="joint_section" style="display:none;">
                      <div class="form-group input_pad">
                        <div class="col-xs-12 col-md-12">
                          <input type="text" id="jointapp_first_name" name="jointapp_first_name" placeholder="Joint Applicant's First Name *">
                        </div>
                      </div>
                      <div class="form-group input_pad">
                        <div class="col-xs-12 col-md-12">
                          <input type="text" id="jointapp_surname" name="jointapp_surname" placeholder="Joint Applicant's Last Name *">
                        </div>
                      </div>
                      <div class="form-group input_pad">
                        <div class="col-xs-12 col-md-12">
                          <input type="text" id="jointapp_mobile" name="jointapp_mobile" placeholder="Mobile *">
                        </div>
                      </div>
                      <div class="form-group input_pad">
                        <div class="col-xs-12 col-md-12">
                          <input type="text" id="jointapp_email" name="jointapp_email" placeholder="Email Address *">
                        </div>
                      </div>
                    </div>
                    <div class="nav_sec">
                      <!-- <a href="javascript:void(0)" data-id="tab0next" class="pull-left prev-step back_btn">
                        <i class="fa fa-angle-left" aria-hidden="true"></i> Back </a> -->
                      <input type="hidden" value="{{$data['loan'][0]->id}}" id="loanID" />
                      <a href="javascript:void(0)" data-tabid="0" data-id="tab0next" class="pull-right  btn-next main_button">Next</a>
                    </div>
                  </fieldset>
                </div>
                <div class="tab-pane" role="tabpanel" id="step2">
                  <fieldset data-step="1" id="personalInformationTab">
                    <div class="nav_sec">
                      <a href="javascript:void(0)" data-tabid="1" data-id="tab1previous" class="pull-left btn-previous main_button ">
                        Previous</a>
                      <a href="javascript:void(0)" data-tabid="1" data-id="tab1next" class="pull-right btn-next main_button">Next</a>
                    </div>
                    <h4 style="margin-top: 110px;">Getting to know you more</h4>
                    <div class="form-group">
                      <label class="control-label col-xs-12" for="applicant_date_of_birth">Date of birth <sup>*</sup>
                      </label>
                      <div class="col-md-4">
                      
                        <select class="form-control col-md-4" name="applicant_birth_date" id="applicant_birth_date" required>
                          <option value="">Date</option> @for ($i = 1; $i <= 31; $i++) 
                          <option value="{{ $i < 10?"0".$i:$i }}" >{{ $i }}
                            </option> @endfor
                        </select>
                      </div>
                      <div class="col-md-4">
                        <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                        <select class="form-control col-md-4" name="applicant_birth_month" id="applicant_birth_month" required>
                          <option value="">Month</option> @foreach($months as $key => $value) <option value="{{ $value }}">{{ $key }}</option> @endforeach
                        </select>
                      </div>
                      <div class="col-md-4">
                        <select class="form-control col-md-4" name="applicant_birth_year" id="applicant_birth_year" required>
                          <option value="">Year</option> @for ($i = date('Y'); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option> @endfor
                        </select>
                      </div>
                      {{-- <input type="text" class="form-control input_date" name="applicant_date_of_birth" id="applicant_date_of_birth" placeholder="DD / MM / YY"/>--}}
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <h3>Gender <sup>*</sup>
                        </h3>
                        <div class="radio-toolbar">
                          <input type="radio" id="female" name="applicant_gender" value="Female" required>
                          <label for="female">Female</label>
                          <input type="radio" id="male" name="applicant_gender" value="Male">
                          <label for="male">Male</label>
                          <input type="radio" id="gender_diverse" name="applicant_gender" value="Gender Diverse">
                          <label for="gender_diverse">Gender Diverse</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <h3>Relationship Status <sup>*</sup></h3>
                        <div class="radio-toolbar">
                          <input type="radio" id="single" name="applicant_marital_status" value="Single" required>
                          <label for="single">Single</label>
                          <input type="radio" id="married" name="applicant_marital_status" value="Married">
                          <label for="married">Married</label>
                          <input type="radio" id="living_with_partner" name="applicant_marital_status" value="Living with Partner">
                          <label for="living_with_partner">Living with partner</label>
                          <input type="radio" id="divorced" name="applicant_marital_status" value="Divorced">
                          <label for="divorced">Divorced</label>
                          <input type="radio" id="widow" name="applicant_marital_status" value="Widow">
                          <label for="widow">Widow</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <h3>Number of dependent</h3>
                        <div class="radio-toolbar">
                          <input type="radio" id="zero" name="applicant_no_of_dependents" value="0" required>
                          <label for="zero">0</label>
                          <input type="radio" id="one" name="applicant_no_of_dependents" value="1">
                          <label for="one">1</label>
                          <input type="radio" id="two" name="applicant_no_of_dependents" value="2">
                          <label for="two">2</label>
                          <input type="radio" id="three" name="applicant_no_of_dependents" value="3">
                          <label for="three">3</label>
                          <input type="radio" id="four" name="applicant_no_of_dependents" value="4">
                          <label for="four">4</label>
                          <input type="radio" id="five" name="applicant_no_of_dependents" value="5+">
                          <label for="five">5+</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <label class="control-label" for="best_time_to_contact">Best Time to contact <sup>*</sup>
                        </label>
                        <select class="form-control col-md-4" name="best_time_to_contact" id="best_time_to_contact" required>
                          <option value="">Select Time</option>
                          <option value="anytime">Anytime</option>
                          <option value="8am - 12pm">8am - 12pm</option>
                          <option value="12pm - 5pm">12pm - 5pm</option>
                          <option value="5pm - 10pm">5pm - 10pm</option>
                        </select>
                      </div>
                    </div>
                    <h4>Current Address
                    </h4>
                    <div class="form-group input_pad">
                      <div class="col-sm-4 col-xs-12">
                        <input type="text" class="form-control" name="current_street_number" placeholder="Street number *" id="current_street_number" required />
                      </div>
                      <div class="col-sm-8 col-xs-12">
                        <input type="text" class="form-control" placeholder="Street Address *" name="current_street_address" id="current_street_address" required />
                      </div>
                    </div>
                    <div class="form-group input_pad">
                      <div class="col-sm-4 col-xs-12">
                        <input type="text" class="form-control" name="current_suburb" placeholder="Suburb *" id="current_suburb" required />
                      </div>
                      <div class="col-sm-4 col-xs-12">
                        <input type="text" class="form-control" name="current_city" placeholder="Town/city *" id="current_city" required />
                      </div>
                      <div class="col-sm-4 col-xs-12">
                        <input type="text" class="form-control" placeholder="Postcode *" name="current_postcode" id="current_postcode" required />
                      </div>
                    </div>
                    <div class="form-group input_pad">
                      <label class="col-xs-12 control-label" for="current_address_from">When did you move to this address? <sup>*</sup>
                      </label>
                      <div class="col-md-6">
                        <select class="form-control col-md-6" name="current_address_from_month" id="current_address_from_month" required>
                          <option value="">Month</option> @foreach($months as $key => $value) <option value="{{ $value }}">{{ $key }}</option> @endforeach
                        </select>
                      </div>
                      <div class="col-md-6">
                        <select class="form-control col-md-6" name="current_address_from_year" id="current_address_from_year" required>
                          <option value="">Year</option> @for ($i = date('Y'); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option> @endfor
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <h3>Accomodation Type</h3>
                      <div class="radio-toolbar">
                        <input type="radio" id="renting" name="accomodation_type" value="I am renting" required>
                        <label for="renting">I am renting</label>
                        <input type="radio" id="family" name="accomodation_type" value="Living with family">
                        <label for="family">Living with family</label>
                        <input type="radio" id="board" name="accomodation_type" value="I board here">
                        <label for="board">I board here</label>
                        <input type="radio" id="house" name="accomodation_type" value="I own this house">
                        <label for="house">I own this house</label>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 proof_head">
                        <h4>Do you have a proof of address</h4>
                        <p>(bank statement, bills etc with your name and address on it) <br /> *Please make sure your proof of address is dated within 3 months of todays date and that this date is visible. </p>
                      </div>
                      <div class="col-sm-12 col-xs-12">
                        <div class="radio-toolbar">
                          <input type="radio" id="address_yes" name="applicant_address_proof_question" class="address_proof_selection" value="yes" required>
                          <label for="address_yes">Yes</label>
                          <input type="radio" id="address_no" name="applicant_address_proof_question" class="address_proof_selection" value="no">
                          <label for="address_no">No</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group" id="applicant_address_upload_section" style="display:none;">
                      <div class="col-sm-6 col-xs-12">
                        <div class="wrapper upload">
                          <p>Please upload a proof of address </p>
                          <div class="drop">
                            <div class="cont">
                              <img src="images/upload_icon.png" alt="upload icon">
                              <div class="tit"> Take Photo or Drag files to upload </div>
                              <div class="browse"> or select files to upload </div>
                            </div>
                            <output id="applicant_address_proof_list"></output>
                            <input class="photo_file4" data-previewid="applicant_address_proof_list" accept=".jpg,.png,.gif,.jpeg,.pdf" name="applicant_address_proof" id="applicant_address_proof" type="file" />
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-xs-12 mt_60">
                        <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                      </div>
                    </div>
                    <div class="refferal_details">
                      <h4>Alternative Contact Person Info. <sup>*</sup>
                      </h4>
                      <p>(must reside at a different address as the applicant)</p>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Firstname *" name="referral_first_name" id="referral_first_name" required />
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Surname *" name="referral_surname" id="referral_surname" required />
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Street number *" name="referral_street_number" id="referral_street_number" required />
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" name="referral_street_name" placeholder="Street name *" id="referral_street_name" required />
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" name="referral_suburb" placeholder="Suburb *" id="referral_suburb" required />
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Town/City *" name="referral_city" id="referral_city" required />
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Mobile *" name="referral_mobile" id="referral_mobile" required />
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Relationship to you *" name="referral_relationship" id="referral_relationship" required />
                        </div>
                      </div>
                    </div>
                    <div class="nav_sec">
                      <!-- <a href="javascript:void(0)" data-id="tab0next" class="pull-left  back_btn">
                        <i class="fa fa-angle-left" aria-hidden="true"></i> Back </a> -->
                      <a href="javascript:void(0)" data-tabid="1" data-id="tab1previous" class="pull-left btn-previous main_button ">
                        Previous</a>
                      <a href="javascript:void(0)" data-tabid="1" data-id="tab1next" class="pull-right btn-next main_button">Next</a>
                    </div>
                  </fieldset>
                </div>
                <div class="tab-pane" role="tabpanel" id="step3">
                  <fieldset data-step="2" class="file-upload-sec" id="applicantLicenceUploadTab">
                    <div class="nav_sec1">
                      <a href="javascript:void(0)" data-tabid="2" data-id="tab2previous" class="pull-left btn-previous main_button ">
                        Previous</a>
                      <a href="javascript:void(0)" data-tabid="2" data-id="tab2next" class="pull-right btn-next main_button">Next</a>
                    </div>
                    <h4 style="margin-top: 80px;">ID Verification</h4>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <label class="control-label" for="residential_status">Residential status <sup>*</sup>
                        </label>
                        <select name="residential_status" id="residential_status" class="form-control">
                          <option value="NZ Citizen">NZ Citizen</option>
                          <option value="NZ Permanent Resident">NZ Permanent Resident</option>
                          <option value="Work Visa">Work Visa</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">

                      <div class="col-sm-4 col-xs-12" id="visaHolder" style="display: none;">
                        <label class="control-label" for="visa_expiry">Visa Expiry <sup>*</sup>
                        </label>
                        <input type="text" class="form-control input_date" id="visa_expiry" name="visa_expiry" placeholder="DD / MM / YY" />
                      </div>
                      <!-- <div class="col-sm-4 col-xs-12">
                        <input type="text" placeholder="Visa Expiry" class="form-control">
                      </div> -->
                    </div>
                    <h3>Type of identification <sup>*</sup>
                    </h3>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <div class="radio-toolbar">
                          <input type="radio" id="driver" name="applicant_id_type" class="applicant_id_type" value="NZ Drivers License" checked>
                          <label for="driver">NZ Driver Licence </label>
                          <input type="radio" id="passport" name="applicant_id_type" class="applicant_id_type" value="NZ Passport">
                          <label for="passport">Passport</label>
                          <input type="radio" id="otherid" name="applicant_id_type" class="applicant_id_type" value="Overseas Passport">
                          <label for="otherid">Other</label>
                        </div>
                      </div>
                    </div>
                    <div id="licence_identification">
                      <h4>For NZDL
                      </h4>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" placeholder="License Number *" class="form-control licence_class" name="licence_number" id="licence_number" required>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" placeholder="Version Number *" class="form-control licence_class" name="version_number" id="version_number" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-4">
                          <select class="form-control col-md-4 licence_class" name="licence_expiry_date" id="licence_expiry_date" required>
                            <option value="">Licence Expriy Date *</option> @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }}
                              </option> @endfor
                          </select>
                        </div>
                        <div class="col-md-4"> <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                          <select class="form-control col-md-4 licence_class" name="licence_expiry_month" id="licence_expiry_month" required>
                            <option value="">Month *</option> @foreach($months as $key => $value) <option value="{{ $value }}">{{ $key }}</option> @endforeach
                          </select>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control col-md-4 licence_class" name="licence_expiry_year" id="licence_expiry_year" required>
                            <option value="">Year *</option> @for ($i = (date('Y') + 30); $i >= (date('Y') - 5); $i--) <option value="{{ $i }}">{{ $i }}</option> @endfor
                          </select>
                        </div>
                        {{-- <input type="text" class="form-control input_date" name="applicant_date_of_birth" id="applicant_date_of_birth" placeholder="DD / MM / YY"/>--}}
                      </div>
                    </div>
                    <div id="passport_identification" style="display:none">
                      <h4>For NZP
                      </h4>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" placeholder="Passport Number *" class="form-control passport_class" name="passport_number" id="passport_number">
                        </div>
                        <div class="col-sm-6 col-xs-12"></div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="form-group">
                        <label class="control-label col-xs-12" for="passport_issue_date">Date of Issue <sup>*</sup></label>
                        <div class="col-md-4">
                          <select class="form-control col-md-4 passport_class" name="passport_issue_date" id="passport_issue_date">
                            <option value="">Date</option> @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }}
                              </option> @endfor
                          </select>
                        </div>
                        <div class="col-md-4"> <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                          <select class="form-control col-md-4 passport_class" name="passport_issue_month" id="passport_issue_month">
                            <option value="">Month</option> @foreach($months as $key => $value) <option value="{{ $value }}">{{ $key }}</option> @endforeach
                          </select>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control col-md-4 passport_class" name="passport_issue_year" id="passport_issue_year">
                            <option value="">Year</option> @for ($i = (date('Y') + 30); $i >= (date('Y') - 5); $i--) <option value="{{ $i }}">{{ $i }}</option> @endfor
                          </select>
                        </div>

                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-12" for="passport_expiry_date">Date of Expiry <sup>*</sup>
                        </label>
                        <div class="col-md-4">
                          <select class="form-control col-md-4 passport_class" name="passport_expiry_date" id="passport_expiry_date">
                            <option value="">Date</option> @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }}
                              </option> @endfor
                          </select>
                        </div>
                        <div class="col-md-4"> <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                          <select class="form-control col-md-4 passport_class" name="passport_expiry_month" id="passport_expiry_month">
                            <option value="">Month</option> @foreach($months as $key => $value) <option value="{{ $value }}">{{ $key }}</option> @endforeach
                          </select>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control col-md-4 passport_class" name="passport_expiry_year" id="passport_expiry_year">
                            <option value="">Year</option> @for ($i = (date('Y') + 30); $i >= (date('Y') - 5); $i--) <option value="{{ $i }}">{{ $i }}</option> @endfor
                          </select>
                        </div>
                      </div>
                    </div>
                    <div id="overseas_passport_identification" style="display:none">
                      <h4>For Other</h4>
                      <div class="form-group">
                        <div class="col-sm-12 col-xs-12">
                          <textarea placeholder="Please Enter Other Identification Details" class="form-control overseas_class" name="overseas_passport_number" id="overseas_passport_number" maxlength="120"></textarea>
                          <!-- <input type="text" placeholder="Passport Number *" class="form-control overseas_class" name="overseas_passport_number" id="overseas_passport_number"> -->
                        </div>
                        <div class="col-sm-6 col-xs-12"></div>
                      </div>
                      <div class="clearfix"></div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12 proof_upload">
                        <h4>Do you have an ID with you to upload </h4>
                        <p>(you can upload a scanned copy or take a photo to upload)
                          <div class="radio-toolbar">
                            <input type="radio" id="yes" name="applicant_id_proof_question" class="applicant_proof_upload" value="yes" required>
                            <label for="yes">Yes</label>
                            <input type="radio" id="no" name="applicant_id_proof_question" class="applicant_proof_upload" value="no">
                            <label for="no">No</label>
                          </div>
                      </div>
                    </div>
                    <div id="applicant_licence_upload_section" style="display:none">
                      <div class="form-group">
                        <div class="col-xs-12 proof_head">
                          <p>
                            <strong>Please Upload your Drivers Licence Front Side</strong>
                          </p>
                          <output id="licence_id_front_camera_list"></output>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="wrapper">
                            <div class="drop">
                              <div class="cont">
                                <img src="images/upload_icon.png" alt="upload icon">
                                <div class="tit"> Take Photo Drag files to upload </div>
                                <div class="browse"> or select files to upload </div>
                              </div>
                              <output id="applicant_id_front_list"></output>
                              <input class="photo_file1" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="applicant_id_front_list" name="applicant_id_front" id="applicant_id_front" type="file" />
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <img src="images/nz_licence_sample_f.png" class="mb_15" alt="licence front image">
                          <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-12 proof_head">
                          <p>
                            <strong>Please Upload your Drivers Licence Back Side</strong>
                          </p>
                          <output id="applicant_id_back_camera_list"></output>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="wrapper">
                            <div class="drop">
                              <div class="cont">
                                <img src="images/upload_icon.png" alt="upload icon">
                                <div class="tit"> Take Photo Drag files to upload </div>
                                <div class="browse"> or select files to upload </div>
                              </div>
                              <output id="applicant_id_back_list"></output>
                              <input class="photo_file2" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="applicant_id_back_list" name="applicant_id_back" id="applicant_id_back" type="file" />
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <img src="images/nz_licence_sample_b.png" class="mb_15" alt="licence front image">
                          <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                        </div>
                      </div>
                    </div>
                    <div id="applicant_passport_upload_section" style="display:none">
                      <div class="form-group">
                        <div class="col-xs-12 proof_head">
                          <p>
                            <strong>Please Upload your Passport Page 1</strong>
                          </p>
                          <output id="applicant_passport_id_front_camera_list"></output>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="wrapper">
                            <div class="drop">
                              <div class="cont">
                                <img src="images/upload_icon.png" alt="upload icon">
                                <div class="tit"> Take Photo or Drag files to upload </div>
                                <div class="browse"> or select files to upload </div>
                              </div>
                              <output id="applicant_passport_id_front_list"></output>
                              <input class="photo_file1" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="applicant_passport_id_front_list" name="applicant_passport_id_front" id="applicant_passport_id_front" type="file" />
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <img src="images/passport_front_sample.png" class="mb_15" alt="licence front image">
                          <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-12 proof_head">
                          <p>
                            <strong>Please Upload your Passport Page 2</strong>
                          </p>
                          <output id="applicant_passport_id_back_camera_list"></output>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="wrapper">
                            <div class="drop">
                              <div class="cont">
                                <img src="images/upload_icon.png" alt="upload icon">
                                <div class="tit"> Take photo or Drag files to upload </div>
                                <div class="browse"> or select files to upload </div>
                              </div>
                              <output id="applicant_passport_id_back_list"></output>
                              <input class="photo_file2" accept=".jpg,.png,.gif,.jpeg,.pdf" name="applicant_passport_id_back_list" id="applicant_passport_id_back" data-previewid="applicant_passport_id_back" type="file" />
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <img src="images/passport_back_sample.png" class="mb_15" alt="licence front image">
                          <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                        </div>
                      </div>
                    </div>
                    <div id="applicant_other_upload_section" style="display:none">
                      <div class="form-group">
                        <div class="col-xs-12 proof_head">
                          <p><strong>Please Upload your ID</strong></p>
                          <output id="jointapp_passport_id_front_camera_list"></output>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="wrapper">
                            <div class="drop">
                              <div class="cont">
                                <img src="images/upload_icon.png" alt="upload icon">
                                <div class="tit"> Take Photo or Drag files to upload </div>
                                <div class="browse"> or select files to upload </div>
                              </div>
                              <output id="jointapp_passport_id_front_list"></output><input class="photo_file1" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="jointapp_passport_id_front_list" name="jointapp_passport_id_front" id="jointapp_passport_id_front" type="file" />
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <!-- <img src="images/passport_front_sample.png" class="mb_15" alt="licence front image"> -->
                          <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 proof_head">
                        <p>
                          <strong>Please Upload your Photo</strong>
                        </p>
                        <output id="applicant_photo_camera_list"></output>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <div class="wrapper">
                          <div class="drop">
                            <div class="cont">
                              <img src="images/upload_icon.png" alt="upload icon">
                              <div class="tit"> Take Photo or Drag files to upload </div>
                              <div class="browse"> or select files to upload </div>
                            </div>
                            <output id="applicant_photo_list"></output>
                            <input class="photo_file3" data-previewid="applicant_photo_list" accept=".jpg,.png,.gif,.jpeg,.pdf" name="applicant_photo" id="applicant_photo" type="file" />
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <img src="images/photo_sample.png" class="mb_15" alt="Sample photo image">
                        <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                      </div>
                    </div>
                    <div class="nav_sec">
                      <!-- <a href="javascript:void(0)" data-id="tab2previous" class="pull-left prev-step back_btn">
                        <i class="fa fa-angle-left" aria-hidden="true"></i> Back </a> -->
                      <a href="javascript:void(0)" data-tabid="2" data-id="tab2previous" class="pull-left btn-previous main_button ">
                        Previous</a>
                      <a href="javascript:void(0)" data-tabid="2" data-id="tab2next" class="pull-right btn-next main_button">Next</a>
                    </div>
                  </fieldset>
                </div>
                <div class="tab-pane" role="tabpanel" id="step4">
                  <fieldset data-step="3" class="file-upload-sec" id="employeeDetailsTab">
                    <div class="nav_sec1">
                      <a href="javascript:void(0)" data-tabid="3" data-id="tab3previous" class="pull-left btn-previous main_button ">
                        Previous</a>
                      <a href="javascript:void(0)" data-tabid="3" data-id="tab3next" class="pull-right btn-next main_button">Next</a>
                    </div>
                    <h4 style="margin-top: 80px;">Employment Details</h4>
                    <h3>Employment status <sup>*</sup>
                    </h3>
                    <div class="form-group">
                      <div class="col-sm-6 col-xs-12">
                        <select name="employment_status" id="employment_status" class="form-control" onchange="toggleEmployeeStatusDiv(this.value)" required>
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
                          <input type="text" class="form-control" name="job_title" id="job_title" placeholder="Job Title *" required />
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12 col-xs-12">
                          <h4>Have you been in employment for longer than 3 months? <sup>*</sup>
                          </h4>
                          <div class="radio-toolbar">
                            <input type="radio" id="duration_of_employment_1" name="duration_of_employment" class="duration_of_employment" value="yes" required>
                            <label for="duration_of_employment_1">Yes</label>
                            <input type="radio" id="duration_of_employment_2" name="duration_of_employment" class="duration_of_employment" value="no">
                            <label for="duration_of_employment_2">No</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" name="employer_name" placeholder="Employer Name *" id="employer_name" required />
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" name="employer_contact_number" placeholder="Employer Contact Number *" id="employer_contact_number" required />
                        </div>
                      </div>
                      <h3>When did you start working here? <sup>*</sup>
                      </h3>
                      <div class="form-group">
                        <div class="col-md-6"> <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                          <select class="form-control col-md-4" name="employment_period_month" id="employment_period_month" required>
                            <option value="">Month</option> @foreach($months as $key => $value) <option value="{{ $value }}">{{ $key }}</option> @endforeach
                          </select>
                        </div>
                        <div class="col-md-6">
                          <select class="form-control col-md-4" name="employment_period_year" id="employment_period_year" required>
                            <option value="">Year</option> @for ($i = date('Y'); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option> @endfor
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-12">Income And Expense
                      </label>
                      <div class="col-sm-12 col-xs-12">
                        <input type="text" class="form-control " name="income" id="income" placeholder="Income *" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <h3>Income frequency <sup>*</sup>
                        </h3>
                        <div class="radio-toolbar">
                          <input type="radio" id="weekly" name="income_frequency" value="Weekly" required>
                          <label for="weekly">Weekly</label>
                          <input type="radio" id="fortnightly" name="income_frequency" value="Fortnightly">
                          <label for="fortnightly">Fortnightly</label>
                          <input type="radio" id="monthly" name="income_frequency" value="Monthly">
                          <label for="monthly">Monthly</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <input type="text" class="form-control" name="expense_amount" id="expense_amount" placeholder="Expense Amount *" required />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <h3>Expense Frequency <sup>*</sup>
                        </h3>
                        <div class="radio-toolbar">
                          <input type="radio" id="expence_weekly" name="expense_frequency" value="Weekly" required>
                          <label for="expence_weekly">Weekly</label>
                          <input type="radio" id="expence_fortnightly" name="expense_frequency" value="Fortnightly">
                          <label for="expence_fortnightly">Fortnightly</label>
                          <input type="radio" id="expence_monthly" name="expense_frequency" value="Monthly">
                          <label for="expence_monthly">Monthly</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="nav_sec">
                        <!-- <a href="javascript:void(0)" data-id="tab3previous" class="pull-left prev-step back_btn">
                          <i class="fa fa-angle-left" aria-hidden="true"></i> Back </a> -->
                        <a href="javascript:void(0)" data-tabid="3" data-id="tab3previous" class="pull-left btn-previous main_button ">
                          Previous</a>
                        <a href="javascript:void(0)" data-tabid="3" data-id="tab3next" class="pull-right btn-next main_button">Next</a>
                      </div>
                    </div>
                  </fieldset>
                </div>
                <div class="tab-pane" role="tabpanel" id="step5">
                  <fieldset data-step="4" id="jointApplicationTab">
                    <div class="nav_sec1">
                      <a href="javascript:void(0)" data-tabid="4" data-id="tab4previous" class="pull-left btn-previous main_button ">
                        Previous</a>
                      <a href="javascript:void(0)" data-tabid="4" data-id="tab4next" class="pull-right btn-next main_button">Next</a></div>
                    <p></p>
                    <h4 style="margin-top: 80px;">Joint Applicant Details <sup>*</sup>
                    </h4>
                    <div class="form-group">
                      <label class="control-label col-xs-12" for="jointapp_date_of_birth">Date of birth <sup>*</sup>
                      </label>
                      <div class="col-md-4">
                        <select class="form-control col-md-4" name="jointapp_birth_date" id="jointapp_birth_date" required>
                          <option value="">Date</option> @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }}
                            </option> @endfor
                        </select>
                      </div>
                      <div class="col-md-4"> <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                        <select class="form-control col-md-4" name="jointapp_birth_month" id="jointapp_birth_month" required>
                          <option value="">Month</option> @foreach($months as $key => $value) <option value="{{ $value }}">{{ $key }}</option> @endforeach
                        </select>
                      </div>
                      <div class="col-md-4">
                        <select class="form-control col-md-4" name="jointapp_birth_year" id="jointapp_birth_year" required>
                          <option value="">Year</option> @for ($i = date('Y'); $i >= 1930; $i--) <option value="{{ $i }}">{{ $i }}</option> @endfor
                        </select>
                      </div>
                      {{-- <input type="text" class="form-control input_date" name="applicant_date_of_birth" id="applicant_date_of_birth" placeholder="DD / MM / YY"/>--}}
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <h3>Gender <sup>*</sup>
                        </h3>
                        <div class="radio-toolbar">
                          <input type="radio" id="joint_female" name="jointapp_gender" value="Female" required>
                          <label for="joint_female">Female</label>
                          <input type="radio" id="joint_male" name="jointapp_gender" value="Male">
                          <label for="joint_male">Male</label>
                          <input type="radio" id="joint_gender_diverse" name="jointapp_gender" value="Gender Diverse">
                          <label for="joint_gender_diverse">Gender Diverse</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <h3>Relationship Status</h3>
                        <div class="radio-toolbar">
                          <input type="radio" id="joint_single" name="jointapp_marital_status" value="Single" required>
                          <label for="joint_single">Single</label>
                          <input type="radio" id="joint_married" name="jointapp_marital_status" value="Married">
                          <label for="joint_married">Married</label>
                          <input type="radio" id="joint_living_with_partner" name="jointapp_marital_status" value="Living with partner">
                          <label for="joint_living_with_partner">Living with partner</label>
                          <input type="radio" id="joint_divorced" name="jointapp_marital_status" value="Divorced">
                          <label for="joint_divorced">Divorced</label>
                          <input type="radio" id="joint_widow" name="jointapp_marital_status" value="Widow">
                          <label for="joint_widow">Widow</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <h3>Number of dependent</h3>
                        <div class="radio-toolbar">
                          <input type="radio" id="joint_zero" name="jointapp_no_of_dependents" value="0" required>
                          <label for="joint_zero">0</label>
                          <input type="radio" id="joint_one" name="jointapp_no_of_dependents" value="1">
                          <label for="joint_one">1</label>
                          <input type="radio" id="joint_two" name="jointapp_no_of_dependents" value="2">
                          <label for="joint_two">2</label>
                          <input type="radio" id="joint_three" name="jointapp_no_of_dependents" value="3">
                          <label for="joint_three">3</label>
                          <input type="radio" id="joint_four" name="jointapp_no_of_dependents" value="4">
                          <label for="joint_four">4</label>
                          <input type="radio" id="joint_five" name="jointapp_no_of_dependents" value="5+">
                          <label for="joint_five">5+</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12"><label class="control-label" for="jointapp_best_time_to_contact">Best Time to Contact <sup>*</sup></label>
                        <select class="form-control col-md-4" name="jointapp_best_time_to_contact" id="jointapp_best_time_to_contact" required>
                          <option value="">Select Time</option>
                          <option value="anytime">Anytime</option>
                          <option value="8am - 12pm">8am - 12pm</option>
                          <option value="12pm - 5pm">12pm - 5pm</option>
                          <option value="5pm - 10pm">5pm - 10pm</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <h4>Joint Applicant contact same as Applicant <sup>*</sup></h4>
                        <div class="radio-toolbar">
                          <input type="radio" id="joint_same_address_1" class="joint_same_address" name="joint_same_address" value="yes">
                          <label for="joint_same_address_1">Yes</label>
                          <input type="radio" id="joint_same_address_2" class="joint_same_address" name="joint_same_address" value="no" required>
                          <label for="joint_same_address_2">No</label>
                        </div>
                      </div>
                    </div>
                    <div id="show_join_same_address" style="display:none;">
                      <h4>Current Address</h4>
                      <div class="form-group input_pad">
                        <div class="col-sm-4 col-xs-12">
                          <input type="text" class="form-control" name="jointapp_current_street_number" placeholder="Street number" id="jointapp_current_street_number" required />
                        </div>
                        <div class="col-sm-8 col-xs-12">
                          <input type="text" class="form-control" placeholder="Street Address" name="jointapp_current_street_address" id="jointapp_current_street_address" required />
                        </div>
                      </div>
                      <div class="form-group input_pad">
                        <div class="col-sm-4 col-xs-12"><input type="text" class="form-control" name="jointapp_current_suburb" placeholder="Suburb" id="jointapp_current_suburb" required /></div>
                        <div class="col-sm-4 col-xs-12"><input type="text" class="form-control" name="jointapp_current_city" placeholder="Town/city" id="jointapp_current_city" required /></div>
                        <div class="col-sm-4 col-xs-12"><input type="text" class="form-control" placeholder="Postcode" name="jointapp_current_postcode" id="jointapp_current_postcode" required /></div>
                      </div>
                      <div class="form-group input_pad">
                        <label class="col-xs-12 control-label" for="jointapp_current_address_from_year">When did you move to this address? <sup>*</sup></label>
                        <div class="col-md-6">
                          <select class="form-control col-md-6" name="jointapp_current_address_from_month" id="jointapp_current_address_from_month" required>
                            <option value="">Month</option>
                            @foreach($months as $key => $value)
                            <option value="{{ $value }}">{{ $key }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-6">
                          <select class="form-control col-md-6" name="jointapp_current_address_from_year" id="jointapp_current_address_from_year" required>
                            <option value="">Year</option>
                            @for ($i = date('Y'); $i >= 1930; $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <h3>Accomodation Type</h3>
                        <div class="radio-toolbar">
                          <input type="radio" id="joint_renting" name="jointapp_accomodation_type" class="jointapp_accomodation" value="I am renting" required>
                          <label for="joint_renting">I am renting</label>
                          <input type="radio" id="joint_family" name="jointapp_accomodation_type" class="jointapp_accomodation" value="Living with family">
                          <label for="joint_family">Living with family</label>
                          <input type="radio" id="joint_board" name="jointapp_accomodation_type" class="jointapp_accomodation" value="I board here">
                          <label for="joint_board">I board here</label>
                          <input type="radio" id="joint_house" name="jointapp_accomodation_type" class="jointapp_accomodation" value="I own this house">
                          <label for="joint_house">I own this house</label>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-12 proof_head">
                          <h4>Do you have a proof of address </h4>
                          <p>(bank statement, bills etc with your name and address on it) <br /> *Please make sure your proof of address is dated within 3 months of today's date and that this date is visible. </p>
                        </div>
                        <div class="col-sm-12 col-xs-12">
                          <div class="radio-toolbar">
                            <input type="radio" id="joint_address_yes" name="joint_address_proof_question" class="jointapp_address_proof_selection" value="yes" required>
                            <label for="joint_address_yes">Yes</label>
                            <input type="radio" id="joint_address_no" name="joint_address_proof_question" class="jointapp_address_proof_selection" value="no">
                            <label for="joint_address_no">No</label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group" id="jointapp_address_upload_section" style="display:none;">
                        <div class="col-sm-6 col-xs-12">
                          <div class="wrapper upload">
                            <p>Please upload a proof of address</p>
                            <div class="drop">
                              <div class="cont">
                                <img src="images/upload_icon.png" alt="upload icon">
                                <div class="tit"> Take Photo or Drag files to upload </div>
                                <div class="browse"> or select files to upload </div>
                              </div>
                              <output id="jointapp_licence_address_proof_list"></output>
                              <input class="photo_file4" data-previewid="jointapp_licence_address_proof_list" accept=".jpg,.png,.gif,.jpeg,.pdf" name="jointapp_licence_address_proof" id="jointapp_licence_address_proof" type="file" />
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 mt_60">
                          <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <h4>Joint Applicant Alternative Contact Person same as Applicant <sup>*</sup></h4>
                        <div class="radio-toolbar">
                          <input type="radio" id="joint_alternative_same_address_1" class="joint_alternative_same_address" name="joint_alternative_same_address" value="yes" required>
                          <label for="joint_alternative_same_address_1">Yes</label>
                          <input type="radio" id="joint_alternative_same_address_2" class="joint_alternative_same_address" name="joint_alternative_same_address" value="no">
                          <label for="joint_alternative_same_address_2">No</label>
                        </div>
                      </div>
                    </div>
                    <div class="refferal_details" id="join_alternative_address_show" style="display:none;">
                      <h4>Alternative Contact Person Info. <sup>*</sup></h4>
                      <p>(must reside at a different address as the applicant)</p>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12"><input type="text" class="form-control" placeholder="Firstname" name="jointapp_referral_first_name" id="jointapp_referral_first_name" required /></div>
                        <div class="col-sm-6 col-xs-12"><input type="text" class="form-control" placeholder="Surname" name="jointapp_referral_surname" id="jointapp_referral_surname" required /></div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12"><input type="text" class="form-control" placeholder="Street number" name="jointapp_referral_street_number" id="jointapp_referral_street_number" required /></div>
                        <div class="col-sm-6 col-xs-12"><input type="text" class="form-control" name="jointapp_referral_street_name" placeholder="Street name" id="jointapp_referral_street_name" required /></div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12"><input type="text" class="form-control" name="jointapp_referral_suburb" placeholder="Suburb" id="jointapp_referral_suburb" required /></div>
                        <div class="col-sm-6 col-xs-12"><input type="text" class="form-control" placeholder="Town/City" name="jointapp_referral_city" id="jointapp_referral_city" required /></div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Mobile" name="jointapp_referral_mobile" id="jointapp_referral_mobile" required />
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" placeholder="Relationship to you" name="jointapp_referral_relationship" id="jointapp_referral_relationship" required />
                        </div>
                      </div>
                    </div>
                    <h4>ID Verification</h4>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <label class="control-label" for="jointapp_residential_status">Residential status <sup>*</sup>
                        </label>
                        <select name="jointapp_residential_status" id="jointapp_residential_status" class="form-control" required>
                          <option value="NZ Citizen">NZ Citizen</option>
                          <option value="NZ Permanent Resident">NZ Permanent Resident</option>
                          <option value="Work Visa">Work Visa</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-4 col-xs-12" id="jointapp_visaHolder" style="display: none;">
                        <input type="text" class="form-control input_date" id="jointapp_visa_expiry" name="jointapp_visa_expiry" placeholder="DD / MM / YY" />
                      </div>
                      <!-- <div class="col-sm-4 col-xs-12">
                        <input type="text" placeholder="Visa Expiry" class="form-control">
                      </div> -->
                    </div>
                    <h3>Type of identification</h3>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <div class="radio-toolbar">
                          <input type="radio" id="joint_driver" name="jointapp_id_type" class="jointapp_id_type" value="NZ Driver Licence" checked required>
                          <label for="joint_driver">NZ Driver Licence </label>
                          <input type="radio" id="joint_passport" name="jointapp_id_type" class="jointapp_id_type" value="Passport">
                          <label for="joint_passport">Passport</label>
                          <input type="radio" id="joint_other" name="jointapp_id_type" class="jointapp_id_type" value="Other">
                          <label for="joint_other">Other</label>
                        </div>
                      </div>
                    </div>
                    <div id="join_licence_identification">
                      <h4>For NZDL</h4>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" placeholder="License Number" class="form-control" name="jointapp_licence_number" id="jointapp_licence_number" required>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" placeholder="Version Number" class="form-control" name="jointapp_version_number" id="jointapp_version_number" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-4">
                          <select class="form-control col-md-4" name="jointapp_licence_expiry_date" id="jointapp_licence_expiry_date" required>
                            <option value="">Licence Expriy Date</option>
                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }} </option> @endfor
                          </select>
                        </div>
                        <div class="col-md-4">
                          <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                          <select class="form-control col-md-4" name="jointapp_licence_expiry_month" id="jointapp_licence_expiry_month" required>
                            <option value="">Month</option>
                            @foreach($months as $key => $value)
                            <option value="{{ $value }}">{{ $key }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control col-md-4" name="jointapp_licence_expiry_year" id="jointapp_licence_expiry_year" required>
                            <option value="">Year</option>
                            @for ($i = (date('Y') + 30); $i >= (date('Y') - 5); $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                          </select>
                        </div>
                        {{-- <input type="text" class="form-control input_date" name="applicant_date_of_birth" id="applicant_date_of_birth" placeholder="DD / MM / YY"/>--}}
                      </div>
                    </div>
                    <div id="join_passport_identification" style="display: none;">
                      <h4>For NZP</h4>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" placeholder="Passport Number *" class="form-control" name="jointapp_passport_number" id="jointapp_passport_number"></div>
                        <div class="col-sm-6 col-xs-12"></div>
                      </div>
                      <div class="clearfix"></div>
                      <div class="form-group">
                        <label class="control-label col-xs-12" for="jointapp_passport_issue_date">Date of Issue <sup>*</sup></label>
                        <div class="col-md-4">
                          <select class="form-control col-md-4" name="jointapp_passport_issue_date" id="jointapp_passport_issue_date">
                            <option value="">Date</option>
                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }} </option> @endfor
                          </select>
                        </div>
                        <div class="col-md-4">
                          <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                          <select class="form-control col-md-4" name="jointapp_passport_issue_month" id="jointapp_passport_issue_month">
                            <option value="">Month</option>
                            @foreach($months as $key => $value)
                            <option value="{{ $value }}">{{ $key }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control col-md-4" name="jointapp_passport_issue_year" id="jointapp_passport_issue_year">
                            <option value="">Year</option>
                            @for ($i = (date('Y') + 30); $i >= (date('Y') - 5); $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-xs-12" for="jointapp_passport_expiry_date">Date of Expiry <sup>*</sup></label>
                        <div class="col-md-4">
                          <select class="form-control col-md-4" name="jointapp_passport_expiry_date" id="jointapp_passport_expiry_date">
                            <option value="">Date</option>
                            @for ($i = 1; $i <= 31; $i++) <option value="{{ $i < 10?"0".$i:$i }}">{{ $i }} </option> @endfor
                          </select>
                        </div>
                        <div class="col-md-4">
                          <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                          <select class="form-control col-md-4" name="jointapp_passport_expiry_month" id="jointapp_passport_expiry_month">
                            <option value="">Month</option>
                            @foreach($months as $key => $value)
                            <option value="{{ $value }}">{{ $key }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-4">
                          <select class="form-control col-md-4" name="jointapp_passport_expiry_year" id="jointapp_passport_expiry_year">
                            <option value="">Year</option>
                            @for ($i = (date('Y') + 30); $i >= (date('Y') - 5); $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                          </select>
                        </div>
                      </div>
                    </div>
                    <div id="join_overseas_passport_identification" style="display: none;">
                      <h4>For Other <sup>*</sup></h4>
                      <div class="form-group">
                        <div class="col-sm-12 col-xs-12">
                          <textarea class="form-control" name="jointapp_overseas_passport_number" id="jointapp_overseas_passport_number" maxlength="120" placeholder="Please Enter Other Identification Details"></textarea>
                          <div class="col-sm-6 col-xs-12"></div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-md-12 proof_upload">
                        <h4>Do you have an ID with you to upload</h4>
                        <p>(you can upload a scanned copy or take a photo to upload)
                          <div class="radio-toolbar">
                            <input type="radio" id="joint_yes" name="jointapp_id_proof_question" class="jointapp_proof_upload" value="yes" required>
                            <label for="joint_yes">Yes</label>
                            <input type="radio" id="joint_no" name="jointapp_id_proof_question" class="jointapp_proof_upload" value="no">
                            <label for="joint_no">No</label>
                          </div>
                      </div>
                    </div>
                    <div id="jointapp_licence_upload_section" style="display:none">
                      <div class="form-group">
                        <div class="col-xs-12 proof_head">
                          <p><strong>Please Upload your Drivers Licence Front Side</strong></p>
                          <output id="jointapp_licence_id_front_camera_list"></output>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="wrapper">
                            <div class="drop">
                              <div class="cont">
                                <img src="images/upload_icon.png" alt="upload icon">
                                <div class="tit"> Take Photo Drag files to upload </div>
                                <div class="browse"> or select files to upload </div>
                              </div>
                              <output id="jointapp_licence_id_front_list"></output>
                              <input class="photo_file1" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="jointapp_licence_id_front_list" name="jointapp_licence_id_front" id="jointapp_licence_id_front" type="file" />
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <img src="images/nz_licence_sample_f.png" class="mb_15" alt="licence front image">
                          <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-12 proof_head">
                          <p><strong>Please Upload your Drivers Licence Back Side</strong></p>
                          <output id="jointapp_licence_id_back_camera_list"></output>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="wrapper">
                            <div class="drop">
                              <div class="cont">
                                <img src="images/upload_icon.png" alt="upload icon">
                                <div class="tit"> Take Photo Drag files to upload </div>
                                <div class="browse"> or select files to upload </div>
                              </div>
                              <output id="jointapp_licence_id_back_list"></output><input class="photo_file2" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="jointapp_licence_id_back_list" name="jointapp_licence_id_back" id="jointapp_licence_id_back" type="file" />
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <img src="images/nz_licence_sample_b.png" class="mb_15" alt="licence front image">
                          <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                        </div>
                      </div>
                    </div>
                    <div id="jointapp_passport_upload_section" style="display:none">
                      <div class="form-group">
                        <div class="col-xs-12 proof_head">
                          <p><strong>Please Upload your Passport Page 1</strong></p>
                          <output id="jointapp_passport_id_front_camera_list"></output>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="wrapper">
                            <div class="drop">
                              <div class="cont">
                                <img src="images/upload_icon.png" alt="upload icon">
                                <div class="tit"> Take Photo or Drag files to upload </div>
                                <div class="browse"> or select files to upload </div>
                              </div>
                              <output id="jointapp_passport_id_front_list"></output><input class="photo_file1" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="jointapp_passport_id_front_list" name="jointapp_passport_id_front" id="jointapp_passport_id_front" type="file" />
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <img src="images/passport_front_sample.png" class="mb_15" alt="licence front image">
                          <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-12 proof_head">
                          <p><strong>Please Upload your Passport Page 2</strong></p>
                          <output id="jointapp_passport_id_back_camera_list"></output>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="wrapper">
                            <div class="drop">
                              <div class="cont">
                                <img src="images/upload_icon.png" alt="upload icon">
                                <div class="tit"> Take photo or Drag files to upload </div>
                                <div class="browse"> or select files to upload </div>
                              </div>
                              <output id="jointapp_passport_id_back_list"></output><input class="photo_file2" accept=".jpg,.png,.gif,.jpeg,.pdf" name="jointapp_passport_id_back" id="jointapp_passport_id_back" data-previewid="jointapp_passport_id_back_list" type="file" />
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <img src="images/passport_back_sample.png" class="mb_15" alt="licence front image">
                          <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                        </div>
                      </div>
                    </div>
                    <div id="jointapp_other_upload_section" style="display:none">
                      <div class="form-group">
                        <div class="col-xs-12 proof_head">
                          <p><strong>Please Upload your ID</strong></p>
                          <output id="jointapp_passport_id_front_camera_list"></output>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <div class="wrapper">
                            <div class="drop">
                              <div class="cont">
                                <img src="images/upload_icon.png" alt="upload icon">
                                <div class="tit"> Take Photo or Drag files to upload </div>
                                <div class="browse"> or select files to upload </div>
                              </div>
                              <output id="jointapp_passport_id_front_list"></output><input class="photo_file1" accept=".jpg,.png,.gif,.jpeg,.pdf" data-previewid="jointapp_passport_id_front_list" name="jointapp_passport_id_front" id="jointapp_passport_id_front" type="file" />
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <!-- <img src="images/passport_front_sample.png" class="mb_15" alt="licence front image"> -->
                          <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-12 proof_head">
                        <p><strong>Please Upload your Photo</strong></p>
                        <output id="jointapp_photo_camera_list"></output>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <div class="wrapper">
                          <div class="drop">
                            <div class="cont">
                              <img src="images/upload_icon.png" alt="upload icon">
                              <div class="tit"> Take Photo or Drag files to upload </div>
                              <div class="browse"> or select files to upload </div>
                            </div>
                            <output id="jointapp_passport_photo_list"></output>
                            <input class="photo_file3" data-previewid="jointapp_passport_photo_list" accept=".jpg,.png,.gif,.jpeg,.pdf" name="jointapp_passport_photo" id="jointapp_passport_photo" type="file" />
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <img src="images/photo_sample.png" class="mb_15" alt="Sample photo image">
                        <p>Files allowed: .pdf, .jpg, .png, .gif <br />Max size: 2MB </p>
                      </div>
                    </div>
                    <h4>Employment Details</h4>
                    <h3>Employment status <sup>*</sup></h3>
                    <div class="form-group">
                      <div class="col-sm-6 col-xs-12">
                        <select name="jointapp_employment_status" id="jointapp_employment_status" class="form-control" required>
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
                    <div id="jointapp_employment_status_div" style="display:none">
                      <div class="employment_status_div">
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" name="jointapp_job_title" id="jointapp_job_title" placeholder="Job Title *" required />
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-12 col-xs-12">
                          <h4>Have you been in employment for longer than 3 months? <sup>*</sup></h4>
                          <div class="radio-toolbar">
                            <input type="radio" id="jointapp_duration_of_employment_1" class="jointapp_duration_of_employment" name="jointapp_duration_of_employment" value="Mr" checked>
                            <label for="jointapp_duration_of_employment_1">Yes</label>
                            <input type="radio" id="jointapp_duration_of_employment_2" class="jointapp_duration_of_employment" name="jointapp_duration_of_employment" value="employee_no">
                            <label for="jointapp_duration_of_employment_2">No</label></div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" name="jointapp_employer_name" placeholder="Employer Name *" id="jointapp_employer_name" required />
                        </div>
                        <div class="col-sm-6 col-xs-12">
                          <input type="text" class="form-control" name="jointapp_employer_contact_number" placeholder="Employer Contact Number *" id="jointapp_employer_contact_number" required />
                        </div>
                      </div>
                      <h3>When did you start working here? <sup>*</sup></h3>
                      <div class="form-group">
                        <div class="col-md-6">
                          <?php $months = ["January" => "01", "February" => "02", "March" => "03", "April" => "04", "May" => "05", "June" => "06", "July" => "07", "August" => "08", "September" => "09", "October" => 10, "November" => 11, "December" => 12] ?>
                          <select class="form-control col-md-4" name="jointapp_employment_period_month" id="jointapp_employment_period_month" required>
                            <option value="">Month</option>
                            @foreach($months as $key => $value)
                            <option value="{{ $value }}">{{ $key }}</option>
                            @endforeach
                          </select>
                        </div>
                        <div class="col-md-6">
                          <select class="form-control col-md-4" name="jointapp_employment_period_year" id="jointapp_employment_period_year" required>
                            <option value="">Year</option>
                            @for ($i = date('Y'); $i >= 1930; $i--)
                            <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-xs-12">Income And Expense</label>
                      <div class="col-sm-12 col-xs-12">
                        <input type="text" class="form-control " name="jointapp_income" id="jointapp_income" placeholder="Income *" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <h3>Income frequency</h3>
                        <div class="radio-toolbar">
                          <input type="radio" id="joint_weekly" name="jointapp_income_frequency" value="Weekly" required>
                          <label for="joint_weekly">Weekly</label>
                          <input type="radio" id="joint_fortnightly" name="jointapp_income_frequency" value="Fortnightly">
                          <label for="joint_fortnightly">Fortnightly</label>
                          <input type="radio" id="joint_monthly" name="jointapp_income_frequency" value="Monthly">
                          <label for="joint_monthly">Monthly</label></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <input type="text" class="form-control" name="jointapp_expense_amount" id="jointapp_expense_amount" placeholder="Expence Amount *" />
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12">
                        <h3>Expense Frequency <sup>*</sup></h3>
                        <div class="radio-toolbar">
                          <input type="radio" id="joint_expence_weekly" name="jointapp_expense_frequency" value="Weekly" required>
                          <label for="joint_expence_weekly">Weekly</label>
                          <input type="radio" id="joint_expence_fortnightly" name="jointapp_expense_frequency" value="Fortnightly">
                          <label for="joint_expence_fortnightly">Fortnightly</label>
                          <input type="radio" id="joint_expence_monthly" name="jointapp_expense_frequency" value="Monthly">
                          <label for="joint_expence_monthly">Monthly</label></div>
                      </div>
                    </div>
                    <div class="nav_sec">
                      <a href="javascript:void(0)" data-tabid="4" data-id="tab4previous" class="pull-left btn-previous main_button ">
                        Previous</a>
                      <a href="javascript:void(0)" data-tabid="4" data-id="tab4next" class="pull-right btn-next main_button">Next</a></div>
                  </fieldset>
                </div>
                <div class="tab-pane" role="tabpanel" id="step6">
                  <fieldset data-step="5" id="vehicleTab">
                    <div class="nav_sec1">
                      <a href="javascript:void(0)" data-tabid="5" data-id="tab5previous" class="pull-left btn-previous main_button ">
                        Previous</a>
                      <a href="javascript:void(0)" data-tabid="5" data-id="tab5next" class="pull-right btn-next main_button">Next</a></div>
                    <h4 style="margin-top: 80px;">Vehicle Details</h4>
                    <div class="info_sec">
                      <div class="info_block">
                        <p>Security is required for all loans over $2000 and for mags, tyres, vehicle repairs and personal loans.Vehicle's must be registered to the person/s applying for finance</p>
                      </div>
                    </div>
                    {{--
                      <div class="form-group">
                        <label class="col-xs-12 control-label" for="is_vehicle_security">Do you want your vehicle to
                        be used as a security?</label>
                        <div class="col-sm-4 col-xs-6 col-op radio"><label>
                          <input type="radio" name="is_vehicle_security" id="is_vehicle_security_y"
                          value="yes"/> Yes
                          <span class="optmark"></span></label>
                        </div>
                        <div class="col-sm-4 col-xs-6 col-op radio"><label>
                          <input type="radio" name="is_vehicle_security" id="is_vehicle_security_n"
                          value="no"/> No
                          <span class="optmark"></span></label>
                        </div>
                      </div>
                      --}}
                    <div class="form-group">
                      <div class="col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="vehicle_make" id="vehicle_make" placeholder="Vehicle make" />
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="vehicle_model" id="vehicle_model" placeholder="Vehicle model" />
                      </div>
                    </div>
                    <div class="form-group hideVehicle">
                      <div class="col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="vehicle_year" id="vehicle_year" placeholder="Year" />
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="vehicle_registration" id="vehicle_registration" placeholder="Vehicle Registration" />
                      </div>
                    </div>
                    <div class="form-group hideVehicle">
                      <div class="col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="registered_owner" id="registered_owner" placeholder="Registered owner" />
                      </div>
                      <div class="col-sm-6 col-xs-12">
                        <input type="text" class="form-control" name="vehicle_colour" id="vehicle_colour" placeholder="Vehicle color" />
                      </div>
                    </div>
                    <div class="checkbox hideVehicle c_box">
                      <label><input type="checkbox" name="vehicle_agreement" id="vehicle_agreement"></label>
                      <p>As the registered owner, I give Smartcover Finance permission to use the above vehicle as a security for my loan.</p>
                    </div>
                    <div class="nav_sec">
                      <a href="javascript:void(0)" data-tabid="5" data-id="tab5previous" class="pull-left btn-previous main_button ">
                        Previous</a>
                      <a href="javascript:void(0)" data-tabid="5" data-id="tab5next" class="pull-right btn-next main_button">Next</a></div>
                  </fieldset>
                </div>
                <div class="tab-pane" role="tabpanel" id="step7">
                  <fieldset data-step="6" id="loanTab">
                    <a href="javascript:void(0)" data-tabid="6" data-id="tab6previous" class="pull-left btn-previous main_button ">
                      Previous</a><a href="javascript:void(0)" data-id="tab7next" class="pull-right btn-next main_button">Next</a>
                    <h4 style="margin-top: 80px;">Loan Repayment *</h4>
                    <p>SmartCover Finance requires that customers repay their loan by either Automatic payment or Direct debit. Please select one of the options below:</p>
                    <div class="radio-toolbar">
                      <input type="radio" id="payment_type_direct_debit" class="loan_payment" name="payment_type" value="direct" checked>
                      <label for="payment_type_direct_debit">Direct Debit</label>
                      <input type="radio" id="payment_type_automatic_debit" class="loan_payment" name="payment_type" value="automatic">
                      <label for="payment_type_automatic_debit">Automatic Payment</label>
                      <input type="radio" id="payment_type_standard_direct_debit" class="loan_payment" name="payment_type" value="standard">
                      <label for="payment_type_standard_direct_debit">Request a standard Direct Debit Form</label>
                    </div>
                    <div class="info_sec">
                      <div class="info_block">
                        <p>Security is required for all loans over $2000 and for mags, tyres, vechicle repairs and personal loans. Vehicle's must be registered to the person/s applying for finance </p>
                      </div>
                    </div>
                    <div class="checkbox c_box">
                      <label>
                        <input type="checkbox" name="secure_sign_agreed" value="Secure Signing" id="secure_sign_agreed">
                        <p>Opt out of Secured Signing</p>
                      </label>
                    </div>
                    <br><br>
                    <div id="bankDetails">
                      <div class="form-group input_pad">
                        <div class="col-sm-12">
                          <h4>Your Bank Account Details</h4>
                          <label class="control-label" for="repayment_bank_account_number">Bank Account Number <sup>*</sup></label>
                        </div>
                        <div class="col-sm-3"><input type="text" class="form-control" maxlength="2" name="repayment_bank_account_number1" id="repayment_bank_account_number1" required></div>
                        <div class="col-sm-3"><input type="text" class="form-control" maxlength="4" name="repayment_bank_account_number2" id="repayment_bank_account_number2" required></div>
                        <div class="col-sm-3"><input type="text" class="form-control" maxlength="7" name="repayment_bank_account_number3" id="repayment_bank_account_number3" required></div>
                        <div class="col-sm-3"><input type="text" class="form-control" maxlength="3" name="repayment_bank_account_number4" id="repayment_bank_account_number4" required></div>
                      </div>
                      <div class="form-group input_pad">
                        <div class="col-sm-12 col-xs-12">
                          <input type="text" class="form-control" name="repayment_bank_account_name" placeholder="Account Name" id="repayment_bank_account_name" required />
                          <div class="checkbox c_box">
                            <label>
                              <input type="checkbox" name="repayment_bank_authorization" value="Verified" id="repayment_bank_authorization">
                              <p> I am authorized to operate this bank account independently.</p>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group input_pad">
                        <div class="col-sm-12 col-xs-12"><input type="text" class="form-control" name="bank_name" id="bank_name" placeholder="Name of the Bank *" required /></div>
                      </div>
                      <div class="form-group input_pad">
                        <div class="col-sm-12 col-xs-12"><input type="text" class="form-control" name="repayment_authorizer_name" id="repayment_authorizer_name" placeholder="Name of the Authorizer" required /><span style="font-size:12px; font-weight:normal; ">It’s a legal requirement that you must be the named bank account holder or have formal authority to operate the bank account independently so you can set up a direct debit. If you are not authorized to operate this bank account, you can call us on 0508 738 765 to request a direct debit form or contact us to arrange alternative payment arrangements.</span></div>
                      </div>
                      <div class="form-group input_pad">
                        <div class="col-sm-6 col-xs-12">
                          <label class="control-label" for="repayment_start_date">Payment Start Date</label><input type="text" class="form-control input_date" placeholder="DD / MM / YY" name="repayment_start_date" id="repayment_start_date" required />
                          <p style="font-size:12px; font-weight:normal; line-height:20px; margin-bottom:20px">(select from the available dates for when you'd like your payments to start)</p>
                        </div>
                        <div class="col-sm-6 col-xs-12 input_pad">
                          <label class="control-label" for="repayment_frequency">Preferred Frequency</label>
                          <select name="repayment_frequency" id="repayment_frequency" class="form-control">
                            <option value="Weekly">Weekly</option>
                            <option value="Fortnightly">Fortnightly</option>
                            <option value="Monthly">Monthly</option>
                          </select>
                          <p style="font-size:12px; font-weight:normal; line-height:20px;margin-bottom:20px"> Your payments will be taken on the same day each week, fortnight or month, or as close to as possible.</p>
                        </div>
                      </div>
                      <div class="info_sec">
                        <div class="info_block">
                          <p class="text-justify"><b>Please note:</b> The start date you choose may alter depending on when the contract is signed and loan process is complete. A full telephone disclosure will take place before the contract is finalized to discuss the payment schedule and direct debit confirmation letter will be sent to the email address supplied once the loan has been opened.</p>
                        </div>
                      </div>
                      <div class="checkbox c_box">
                        <label class="text-justify">
                          <input type="checkbox" name="repayment_authorization" value="Verified" id="repayment_authorization" required>
                          <p>I agree to the </p>
                          <span><a href="#" data-toggle="modal" data-target="#terms_and_conditions_modal">direct debit terms and conditions</a>. I authorize Smartcover Finance to process direct debits to my nominated account, and I authorize my bank to accept these payments. I’m aware that I can contact Smartcover Finance on 0508 738 765 to change/cancel my payment method at any time. *</span></label< /p> </div> </div> <br><br>
                          <div class="form-group">
                            <div class="col-sm-12 col-xs-12 disputes">
                              <p>*Direct Debit Disputes: The Direct Debit Terms and Conditions set out the responsibilities of each party and explain the process for any disputed transactions. If you have any questions about your payments, or wish to change or cancel these direct debit instructions, please contact us on 0508 738 765</p>
                            </div>
                          </div>
                          <div class="nav_sec">
                            <a href="javascript:void(0)" data-id="tab6previous" class="pull-left btn-previous main_button ">
                              Previous</a><a href="javascript:void(0)" data-tabid="6" data-id="tab7next" class="pull-right btn-next main_button">Next</a></div>
                  </fieldset>
                </div>
                <div class="tab-pane" role="tabpanel" id="step8">
                  <fieldset data-step="7" id="privacy">
                    <div class="nav_sec1"><a href="javascript:void(0)" data-id="tab7previous" class="pull-left btn-previous main_button ">
                        Previous</a></div>
                    <h4 style="margin-top: 80px;">Privacy Waiver</h4>
                    <div class="alert alert-danger" id="alertHolder" style="display:none;">
                      <p>In order to proceed please accept the Privacy Waiver.</p>
                    </div>
                    <div class="content_section using_listStyle text-justify" id="privacy_act">
                      <h3>The Privacy Waiver act 1993</h3>
                      <p>I/we authorise Smartcover Finance to collect, retain and use the personal information about me/us for the purpose of:</p>
                      <ul>
                        <li>Assessing my/our credit worthiness;</li>
                        <li>Attending to the financing, whether directly or indirectly, of my/our contract(s) and enforcing Smartcovers rights thereunder; </li>
                        <li>Marketing and/or informing me/us about the goods and services provided by Smartcover </li>
                      </ul>
                      <p> I/we authorise Smartcover to collect from</p>
                      <ul>
                        <li>credit reporting agencies, credit providers, my/our employer(s), accountant(s), relatives, or other person(s) such personal, financial and commercial information about me/us for the said purposes. </li>
                      </ul>
                      <p>I/we authorise Smartcover to provide this information:</p>
                      <ul>
                        <li>To any person for the foregoing purposes;</li>
                        <li>To any employees and agents of Smartcover and/or any other person, in any ordinary course of business, for any of the foregoing purposes; </li>
                        <li> To credit agencies for the purpose of maintaining proper or effective records.</li>
                      </ul>
                      <p>I/we acknowledge that if I/we do not provide all or any part of the information requested on this application form, my/our application for finance may be declined. I/we further acknowledge that pursuant to the Privacy Act 1993, I/we have a right of access to information collected by Smartcover about me/us and to request that this information be corrected.</p>
                      <p>The information will be held at the office of Smartcover Finance Limited, 3-2E Ceres Court, Albany, Auckland or the registered offices of any party nominated by Smartcover Finance Limited. * Smartcover Finance Limited and other associated third parties.</p>
                      <h4>Privacy Act Acceptance</h4>
                      <p>I accept the terms and conditions as set out above</p>
                      <div class="nav_sec"><a href="javascript:void(0)" data-id="tab7previous" class="pull-left btn-previous main_button ">
                          Previous</a></div>
                      <input type="submit" value="Complete" class="pull-right" name="online_application_submit" id="online_application_submit">
                    </div>
                  </fieldset>
                  <!-- <div class="checkbox privacy_agreement c_box ">
                      <label>
                        <input type="checkbox" name="privacy_act_agreement" value="Privacy Check" id="privacy_act_agreement">
                        <p>I confirm that I have read and understood the document before proceeding.</p>
                      </label>
                    </div> -->
                  <!-- <div class="nav_sec"><a href="javascript:void(0)" data-id="tab7previous" class="pull-left btn-previous main_button ">
                                    Previous</a><a href="javascript:void(0)" data-id="tab6next" class="pull-right btn-next main_button">Next</a></div></div> -->
                  <div class="clearfix"></div>
                  </fieldset>
                </div>
            </form>
          </div>
    </section>
    <!-- Modal -->
    <div id="terms_and_conditions_modal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <p>
          </ <div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button>
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
          <p> If Smartcover Finance Limited proposes a change to an amount and/or date of a direct debit specified in the notice Smartcover Finance Limited is required to give me notice no later than 10 calendar days before the change. </p>
          <p> I may ask my bank to reverse a direct debit up to 120 calendar days after the debit if: </p>
          <ul>
            <li> I don’t receive a written notice of the amount and date of each direct debit from Smartcover Finance Ltd or </li>
            <li>I receive a written notice but the amount or the date of debiting is different from the amount or the date specified on the notice.</li>
          </ul>
          <p>If the bank dishonours a direct debit, Smartcover Finance Limited may attempt to retake the amount from my bank account within five business days without further notice.</p>
          <p>I may ask my bank to receive a direct debit up to nine months after the date Smartcover Finance Limited sends the first direct debit under the authority, if I am not reasonably satisfied that the authority authorized my bank to debit my account with the amount of the direct debit.</p>
        </div>
      </div>
      <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Close</button></div>
    </div>
  </div>
  </div>
  <!-- /Section Online Form -->
  <div id="jspdf_div" style="display:none">
    <h3 class="section_head">Loan Repayments </h3>
    <h5>Your Bank Account Details</h5>
    <div class="form-group">
      <div><label class="control-label" for="">Bank Account Number<sup>*</sup></label></div>
      <div class="col-sm-3"><input type="text" class="" maxlength="2"></div>
      <div class="col-sm-3"><input type="text" class="form-control" maxlength="4"></div>
      <div class="col-sm-3"><input type="text" class="form-control" maxlength="7"></div>
      <div class="col-sm-3"><input type="text" class="form-control" maxlength="3"></div>
    </div>
    <div class="form-group">
      <div class="col-sm-12 col-xs-12"><label class="control-label">Account Name<sup>*</sup></label><input type="text" class="form-control" />
        <div class="checkbox"><label><input type="checkbox" value="Privacy Check"> I am authorized to operate this bank account independently.</label></div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-12 col-xs-12"><label class="control-label">Name of the Bank<sup>*</sup></label><input type="text" class="form-control" /></div>
    </div>
    <div class="form-group">
      <div class="col-sm-12 col-xs-12"><label class="control-label">Name of the Authorizer<sup>*</sup></label><input type="text" class="form-control" />
        <!-- <span>It’s a legal requirement that you must be the named bank account holder or have formal authority to operate the bank account independently so you can set up a direct debit. If you are not authorized to operate this bank account, <br>you can call us on 0508 738 765 to request a direct debit form or contact us to arrange alternative payment arrangements.</span> -->
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-6 col-xs-12"><label class="control-label" for="repayment_start_date">Payment Start Date<sup>*</sup></label><input type="text" />
        <!-- <span style="font-size:12px; font-weight:normal;"> (select from the available dates for when you'd like your payments to start)</span> -->
      </div>
      <div class="col-sm-6 col-xs-12"><label class="control-label" for="repayment_frequency">Preferred Frequency<sup>*</sup></label><input type="text" />
        <!-- <span style="font-size:12px; font-weight:normal;"> Your payments will be taken on the same day each week, fortnight or month, or as close to as possible.</span> -->
      </div>
    </div>
    <!-- <div class="info_sec"><div class="info_block"><p>The start date you choose may alter depending on when the contracting is signed, and loan process is completed. A full telephone disclousure will take place before the finalized is discuss the payment schedule and direct debit confirmation letter will be sent to the postal address supplied once the loan has been opened.</p></div></div> --><br>
    <!-- <div class="checkbox"><label><input type="checkbox" value="Privacy Check">
                    I agree to the direct debit terms and conditions. I authorize Smartcover Finance to process direct debits to my nominated account, and
                    I authorize my bank to accept these payments. I’m aware that I can contact Smartcover Finance on 0508 738 765 to change/cancel my payment method at any time. *</label></div> --><br>
    <div class="form-group">
      <div class="col-sm-12 col-xs-12">
        <!-- <span style="font-size:12px; font-weight:normal;"> *Direct Debit Disputes: The Direct Debit Terms and Conditions set out the responsibilities of each party and explain the process for any disputed transactions. If you have any questions about your payments, or wish to change or cancel these direct debit instructions, please contact us on 0508 738 765</span> -->
      </div>
    </div>
  </div>
  </div>
  <!-- /Main -->
  <!-- Footer -->
  <footer class="footer_section transition-child full-width green_bg padTB_45">
    <div class="footer_top">
      <div class="container">
        <ul>
          <li><a href="https://www.smartcover.co.nz/">Home</a></li>
          <li><a href="https://www.smartcover.co.nz/?page_id=36">Agent Locator</a></li>
          <li><a href="https://www.smartcover.co.nz/faq/">FAQ</a></li>
          <li><a href="https://www.smartcover.co.nz/schedule-of-fees/">Schedule of Fees</a></li>
          <li><a href="https://www.smartcover.co.nz/contact-us/">Contact Us</a></li>
          <li><a href="http://s3-ap-southeast-2.amazonaws.com/wh1.thewebconsole.com/wh/4662/images/TERMS-AND-CONDITIONS.pdf">Terms & Conditions</a></li>
          <li><a href="#">Online Application</a></li>
        </ul>
        <p>@2021 SmartCover.All Rights Reserved. Website by Mello</p>
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
  <script src="{{ asset('/js/js.js?v=1.8') }}"></script>
  <script src="{{ asset('/js/newjs.js?v=1.8') }}"></script>
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script id="rendered-js">
    $(document).ready(function() {
      //Initialize tooltips
      $('.nav-tabs > li a[title]').tooltip();
      //Wizard
      $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        var $target = $(e.target);
        if ($target.parent().hasClass('disabled')) {
          return false;
        }
      });
      $(".next-step").click(function(e) {
        var $active = $('.wizard .nav-tabs li.active');
        $active.next().removeClass('disabled');
        nextTab($active);
      });
      // $(".btn-next").click(function(e) {

      // });
      // $(".prev-step").click(function(e) {
      //   var $active = $('.wizard .nav-tabs li.active');
      //   prevTab($active);
      // });
    });

    function nextTab(elem) {
      $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
      $(elem).prev().find('a[data-toggle="tab"]').click();
    }
  </script>
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>
  <script src="https://rawgit.com/andreruffert/rangeslider.js/develop/dist/rangeslider.min.js"></script>
  <script id="rendered-js">
    $('input[type="range"]').rangeslider({
      // Feature detection the default is `true`.
      // Set this to `false` if you want to use
      // the polyfill also in Browsers which support
      // the native <input type="range"> element.
      polyfill: false,
      // Default CSS classes
      rangeClass: 'rangeslider',
      disabledClass: 'rangeslider--disabled',
      horizontalClass: 'rangeslider--horizontal',
      fillClass: 'rangeslider__fill',
      handleClass: 'rangeslider__handle',
      // Callback function
      onInit: function() {
        $rangeEl = this.$range;
        // add value label to handle
        var $handle = $rangeEl.find('.rangeslider__handle');
        var handleValue = '<div class="rangeslider__handle__value">' + this.value + '</div>';
        $handle.append(handleValue);
        // get range index labels
        var rangeLabels = this.$element.attr('labels');
        rangeLabels = rangeLabels.split(', ');
        // add labels
        $rangeEl.append('<div class="rangeslider__labels"></div>');
        $(rangeLabels).each(function(index, value) {
          $rangeEl.find('.rangeslider__labels').append('<span class="rangeslider__labels__label">' + value + '</span>');
        })
      },
      // Callback function
      onSlide: function(position, value) {
        var $handle = this.$range.find('.rangeslider__handle__value');
        $handle.text(this.value);
      },
      // Callback function
      onSlideEnd: function(position, value) {}
    });


    /**
     * Dynamic Store Name changes on click Category
     *  */

    $('#loan_category').on('change', function() {
      var categoryID = $(this).val();
      if (categoryID) {
        $.ajax({
          type: "GET",
          url: "{{url('getStores')}}/" + categoryID,
          success: function(res) {
            if (res) {
              $("#loan_agent").empty();
              $("#loan_agent").append('<option>Please Select</option>');
              $.each(res, function(key, value) {

                $("#loan_agent").append('<option value="' + value.id + '">' + value.company_name + '</option>');
              });

            } else {
              $("#loan_agent").empty();
            }
          }
        });
      } else {
        $("#loan_agent").empty();
      }
    });

    function save(tabpanel) {
      var loanID = $("#loanID").val();
      if (tabpanel == 0) {
        var loan_amount = $("#loan_amount").val();
        var loan_reason = $("#loan_reason").val();
        var loan_category = $("#loan_category").val();
        var loan_agent = $("#loan_agent").val();
        var applicant_title = $('input[name="applicant_title"]:checked').val();
        var applicant_first_name = $("#applicant_first_name").val();
        var applicant_middle_name = $("#applicant_middle_name").val();
        var applicant_surname = $("#applicant_surname").val();
        var applicant_mobile = $("#applicant_mobile").val();
        var applicant_email = $("#applicant_email").val();
        var is_joint_application = $("input[name='is_joint_application']:checked").val();
        var jointapp_first_name = $("#jointapp_first_name").val();
        var jointapp_surname = $("#jointapp_surname").val();
        var jointapp_mobile = $("#jointapp_mobile").val();
        var jointapp_email = $("#jointapp_email").val();

        var data = {
          "loan_amount": loan_amount,
          "loan_reason": loan_reason,
          "loan_category": loan_category,
          "loan_agent": loan_agent,
          "applicant_title": applicant_title,
          "applicant_first_name": applicant_first_name,
          "applicant_middle_name": applicant_middle_name,
          "applicant_surname": applicant_surname,
          "applicant_mobile": applicant_mobile,
          "applicant_email": applicant_email,
          "is_joint_application": is_joint_application,
          "jointapp_first_name": jointapp_first_name,
          "jointapp_surname": jointapp_surname,
          "jointapp_mobile": jointapp_mobile,
          "jointapp_email": jointapp_email,
          "tab": tabpanel
        };
        if (!parseInt(loanID)) {
          $.ajax({
            type: "POST",
            url: "{{url('add-loan')}}",
            data: {
              "_token": "{{ csrf_token() }}",
              "data": data
            },
            success: function(res) {
              if (res) {
                debugger;
                $("#loanID").val(res.loan_id);
                $("#loan_number_display").show();
                $("#loan_number_from_db").html(res.loan_number);
              } else {
                alert("server error");
              }
            }
          });
        } else {
          updateLoanDetails(loanID, data);
        }
      } else if (tabpanel == 1) {
        var applicant_birth_date = $("#applicant_birth_date").val();
        var applicant_birth_month = $("#applicant_birth_month").val();
        var applicant_birth_year = $("#applicant_birth_year").val();
        var applicant_date_of_birth = applicant_birth_year + "/" + applicant_birth_month + "/" + applicant_birth_date;

        var applicant_gender = $('input[name="applicant_gender"]:checked').val();
        var applicant_marital_status = $('input[name="applicant_marital_status"]:checked').val();
        var applicant_no_of_dependents = $('input[name="applicant_no_of_dependents"]:checked').val();

        var best_time_to_contact = $("#best_time_to_contact").val();
        var current_street_number = $("#current_street_number").val();
        var current_street_address = $("#current_street_address").val();
        var current_suburb = $("#current_suburb").val();
        var current_city = $("#current_city").val();
        var current_postcode = $("#current_postcode").val();
        var current_address_from_month = $("#current_address_from_month").val();
        var current_address_from_year = $("#current_address_from_year").val();
        var accomodation_type = $('input[name="accomodation_type"]:checked').val();
        var applicant_address_proof_question = $('input[name="applicant_address_proof_question"]:checked').val();
        // var applicant_address_proof = $("#applicant_address_proof").val();
        var referral_first_name = $("#referral_first_name").val();
        var referral_surname = $("#referral_surname").val();
        var referral_street_number = $("#referral_street_number").val();
        var referral_street_name = $("#referral_street_name").val();
        var referral_suburb = $("#referral_suburb").val();
        var referral_city = $("#referral_city").val();
        var referral_mobile = $("#referral_mobile").val();
        var referral_relationship = $("#referral_relationship").val();

        var data = {
          "applicant_date_of_birth": applicant_date_of_birth,
          "applicant_gender": applicant_gender,
          "applicant_marital_status": applicant_marital_status,
          "applicant_no_of_dependents": applicant_no_of_dependents,
          "best_time_to_contact": best_time_to_contact,
          "current_street_number": current_street_number,
          "current_street_address": current_street_address,
          "current_suburb": current_suburb,
          "current_city": current_city,
          "current_postcode": current_postcode,
          "current_address_from_month": current_address_from_month,
          "current_address_from_year": current_address_from_year,
          "accomodation_type": accomodation_type,
          "applicant_address_proof_question": applicant_address_proof_question,
          // "applicant_address_proof" : applicant_address_proof,
          "referral_first_name": referral_first_name,
          "referral_surname": referral_surname,
          "referral_street_number": referral_street_number,
          "referral_street_name": referral_street_name,
          "referral_suburb": referral_suburb,
          "referral_city": referral_city,
          "referral_mobile": referral_mobile,
          "referral_relationship": referral_relationship,
          "tab": tabpanel
        }

        updateLoanDetails(loanID, data);
      } else if (tabpanel == 2) {
        var residential_status = $("#residential_status").val();
        var visa_expiry = $("#visa_expiry").val();
        visa_expiry = visa_expiry.split("/")[2] + "/" + visa_expiry.split("/")[1] + "/" + visa_expiry.split("/")[0];
        var applicant_id_type = $('input[name="applicant_id_type"]:checked').val();
        var licence_number = $("#licence_number").val();
        var version_number = $("#version_number").val();
        var licence_expiry_date = $("#licence_expiry_date").val();
        licence_expiry_date = licence_expiry_date.split("/")[2] + "/" + licence_expiry_date.split("/")[1] + "/" + licence_expiry_date.split("/")[0];
        var licence_expiry_month = $("#licence_expiry_month").val();
        var licence_expiry_year = $("#licence_expiry_year").val();

        var licence_expiry_date = licence_expiry_year + "/" + licence_expiry_month + "/" + licence_expiry_date;

        var passport_number = $("#passport_number").val();
        var passport_issue_date = $("#passport_issue_date").val();
        var passport_issue_month = $("#passport_issue_month").val();
        var passport_issue_year = $("#passport_issue_year").val();

        var passport_issue_date = passport_issue_year + "/" + passport_issue_month + "/" + passport_issue_date;

        var passport_expiry_date = $("#passport_expiry_date").val();
        var passport_expiry_month = $("#passport_expiry_month").val();
        var passport_expiry_year = $("#passport_expiry_year").val();

        var passport_expiry_date = passport_expiry_year + "/" + passport_expiry_month + "/" + passport_expiry_date;

        var applicant_id_proof_question = $('input[name="applicant_id_proof_question"]:checked').val();
        // applicant_id_front,applicant_id_back,applicant_passport_id_front,applicant_passport_id_back,jointapp_passport_id_front_list,applicant_photo_list

        var data = {
          "residential_status": residential_status,
          "visa_expiry": visa_expiry,
          "applicant_id_type": applicant_id_type,
          "licence_number": licence_number,
          "version_number": version_number,
          "licence_expiry_date": licence_expiry_date,
          "passport_issue_date": passport_issue_date,
          "passport_expiry_date": passport_expiry_date,
          "applicant_id_proof_question": applicant_id_proof_question,
          "tab": tabpanel
        }
        updateLoanDetails(loanID, data);
      } else if (tabpanel == 3) {
        var employment_status = $("#employment_status").val();
        var job_title = $("#job_title").val();
        var duration_of_employment = $('input[name="duration_of_employment"]:checked').val();
        var employer_name = $("#employer_name").val();
        var employer_contact_number = $("#employer_contact_number").val();
        var employment_period_month = $("#employment_period_month").val();
        var employment_period_year = $("#employment_period_year").val();
        var income = $("#income").val();
        var income_frequency = $('input[name="income_frequency"]:checked').val();
        var expense = $("#expense_amount").val();
        var expense_frequency = $('input[name="expense_frequency"]:checked').val();

        var data = {
          "employment_status": employment_status,
          "job_title": job_title,
          "duration_of_employment": duration_of_employment,
          "employer_name": employer_name,
          "employer_contact_number": employer_contact_number,
          "employment_period_month": employment_period_month,
          "employment_period_year": employment_period_year,
          "income": income,
          "income_frequency": income_frequency,
          "expense": expense,
          "expense_frequency": expense_frequency,
          "tab": tabpanel
        }
        updateLoanDetails(loanID, data);
      } else if (tabpanel == 4) {
        var jointapp_birth_date = $("#jointapp_birth_date").val();

        var jointapp_birth_month = $("#jointapp_birth_month").val();
        var jointapp_birth_year = $("#jointapp_birth_year").val();

        var jointapp_birth_date = jointapp_birth_year + "/" + jointapp_birth_month + "/" + jointapp_birth_date;

        var jointapp_gender = $('input[name="jointapp_gender"]:checked').val();
        var jointapp_marital_status = $('input[name="jointapp_marital_status"]:checked').val();
        var jointapp_no_of_dependents = $('input[name="jointapp_no_of_dependents"]:checked').val();
        var jointapp_best_time_to_contact = $("#jointapp_best_time_to_contact").val();
        var joint_same_address = $('input[name="joint_same_address"]:checked').val();
        var jointapp_current_street_number = $("#jointapp_current_street_number").val();
        var jointapp_current_street_address = $("#jointapp_current_street_address").val();
        var jointapp_current_suburb = $("#jointapp_current_suburb").val();
        var jointapp_current_city = $("#jointapp_current_city").val();

        var jointapp_current_postcode = $("#jointapp_current_postcode").val();
        var jointapp_current_address_from_month = $("#jointapp_current_address_from_month").val();
        var jointapp_current_address_from_year = $("#jointapp_current_address_from_year").val();
        var jointapp_accomodation_type = $('input[name="jointapp_accomodation_type"]:checked').val();
        var joint_address_proof_question = $('input[name="joint_address_proof_question"]:checked').val();
        var joint_alternative_same_address = $('input[name="joint_alternative_same_address"]:checked').val();
        var jointapp_referral_first_name = $("#jointapp_referral_first_name").val();
        var jointapp_referral_surname = $("#jointapp_referral_surname").val();
        var jointapp_referral_street_number = $("#jointapp_referral_street_number").val();
        var jointapp_referral_street_name = $("#jointapp_referral_street_name").val();
        var jointapp_referral_suburb = $("#jointapp_referral_suburb").val();
        var jointapp_referral_city = $("#jointapp_referral_city").val();
        var jointapp_referral_mobile = $("#jointapp_referral_mobile").val();
        var jointapp_referral_relationship = $("#jointapp_referral_relationship").val();
        var jointapp_residential_status = $("#jointapp_residential_status").val();
        var jointapp_visa_expiry = $("#jointapp_visa_expiry").val(); //date
        jointapp_visa_expiry = jointapp_visa_expiry.split("/")[2] + "/" + jointapp_visa_expiry.split("/")[1] + "/" + jointapp_visa_expiry.split("/")[0];
        var jointapp_id_type = $('input[name="jointapp_id_type"]:checked').val();
        var jointapp_licence_number = $("#jointapp_licence_number").val();
        var jointapp_version_number = $("#jointapp_version_number").val();
        var jointapp_licence_expiry_date = $("#jointapp_licence_expiry_date").val();
        var jointapp_licence_expiry_month = $("#jointapp_licence_expiry_month").val();
        var jointapp_licence_expiry_year = $("#jointapp_licence_expiry_year").val();

        var jointapp_licence_expiry_date = jointapp_licence_expiry_year + "/" + jointapp_licence_expiry_month + "/" + jointapp_licence_expiry_date;
        var jointapp_passport_number = $("#jointapp_passport_number").val();
        var jointapp_passport_issue_date = $("#jointapp_passport_issue_date").val();
        var jointapp_passport_issue_month = $("#jointapp_passport_issue_month").val();
        var jointapp_passport_issue_year = $("#jointapp_passport_issue_year").val();

        var jointapp_passport_issue_date = jointapp_passport_issue_year + "/" + jointapp_passport_issue_month + "/" + jointapp_passport_issue_date;

        var jointapp_passport_expiry_date = $("#jointapp_passport_expiry_date").val();
        var jointapp_passport_expiry_month = $("#jointapp_passport_expiry_month").val();
        var jointapp_passport_expiry_year = $("#jointapp_passport_expiry_year").val();

        var jointapp_passport_expiry_date = jointapp_passport_expiry_year + "/" + jointapp_passport_expiry_month + "/" + jointapp_passport_expiry_date;
        var jointapp_overseas_passport_number = $("#jointapp_overseas_passport_number").val();
        var jointapp_id_proof_question = $('input[name="jointapp_id_proof_question"]:checked').val();
        var jointapp_employment_status = $("#jointapp_employment_status").val();
        var jointapp_job_title = $("#jointapp_job_title").val();
        var jointapp_duration_of_employment = $('input[name="jointapp_duration_of_employment"]:checked').val();
        var jointapp_employer_name = $("#jointapp_employer_name").val();
        var jointapp_employer_contact_number = $("#jointapp_employer_contact_number").val();
        var jointapp_employment_period_month = $("#jointapp_employment_period_month").val();
        var jointapp_employment_period_year = $("#jointapp_employment_period_year").val();
        var jointapp_income = $("#jointapp_income").val();
        var jointapp_expense_amount = $("#jointapp_expense_amount").val();
        var jointapp_income_frequency = $('input[name="jointapp_income_frequency"]:checked').val();
        var jointapp_expense_frequency = $('input[name="jointapp_expense_frequency"]:checked').val();
        var data = {
          "jointapp_birth_date": jointapp_birth_date,
          "jointapp_gender": jointapp_gender,
          "jointapp_marital_status": jointapp_marital_status,
          "jointapp_no_of_dependents": jointapp_no_of_dependents,
          "jointapp_best_time_to_contact": jointapp_best_time_to_contact,
          "joint_same_address": joint_same_address,
          "jointapp_current_street_number": jointapp_current_street_number,
          "jointapp_current_street_address": jointapp_current_street_address,
          "jointapp_current_suburb": jointapp_current_suburb,
          "jointapp_current_city": jointapp_current_city,
          "jointapp_current_postcode": jointapp_current_postcode,
          "jointapp_current_address_from_month": jointapp_current_address_from_month,
          "jointapp_current_address_from_year": jointapp_current_address_from_year,
          "jointapp_accomodation_type": jointapp_accomodation_type,
          "joint_address_proof_question": joint_address_proof_question,
          "joint_alternative_same_address": joint_alternative_same_address,
          "jointapp_referral_first_name": jointapp_referral_first_name,
          "jointapp_referral_surname": jointapp_referral_surname,
          "jointapp_referral_street_number": jointapp_referral_street_number,
          "jointapp_referral_street_name": jointapp_referral_street_name,
          "jointapp_referral_suburb": jointapp_referral_suburb,
          "jointapp_referral_city": jointapp_referral_city,
          "jointapp_referral_mobile": jointapp_referral_mobile,
          "jointapp_referral_relationship": jointapp_referral_relationship,
          "jointapp_residential_status": jointapp_residential_status,
          "jointapp_visa_expiry": jointapp_visa_expiry,
          "jointapp_id_type": jointapp_id_type,
          "jointapp_licence_number": jointapp_licence_number,
          "jointapp_version_number": jointapp_version_number,
          "jointapp_licence_expiry_date": jointapp_licence_expiry_date,
          "jointapp_passport_number": jointapp_passport_number,
          "jointapp_passport_issue_date": jointapp_passport_issue_date,
          "jointapp_passport_expiry_date": jointapp_passport_expiry_date,
          "jointapp_overseas_passport_number": jointapp_overseas_passport_number,
          "jointapp_id_proof_question": jointapp_id_proof_question,
          "jointapp_employment_status": jointapp_employment_status,
          "jointapp_job_title": jointapp_job_title,
          "jointapp_duration_of_employment": jointapp_duration_of_employment,
          "jointapp_employer_name": jointapp_employer_name,
          "jointapp_employer_contact_number": jointapp_employer_contact_number,
          "jointapp_employment_period_month": jointapp_employment_period_month,
          "jointapp_employment_period_year": jointapp_employment_period_year,
          "jointapp_income": jointapp_income,
          "jointapp_expense_amount": jointapp_expense_amount,
          "jointapp_income_frequency": jointapp_income_frequency,
          "jointapp_expense_frequency": jointapp_expense_frequency,
          "tab": tabpanel
        }
        updateLoanDetails(loanID, data);
      } else if (tabpanel == 5) {
        var vehicle_make = $("#vehicle_make").val();
        var vehicle_model = $("#vehicle_model").val();
        var vehicle_year = $("#vehicle_year").val();
        var vehicle_registration = $("#vehicle_registration").val();
        var registered_owner = $("#registered_owner").val();
        var vehicle_colour = $("#vehicle_colour").val();
        var vehicle_agreement = $('input[name="vehicle_agreement"]:checked').val();
        if ($('input[name="vehicle_agreement"]:checked').length > 0) {
          var vehicle_agreement = "1";
        } else {
          var vehicle_agreement = "0";
        }

        var data = {
          "vehicle_make": vehicle_make,
          "vehicle_model": vehicle_model,
          "vehicle_year": vehicle_year,
          "vehicle_registration": vehicle_registration,
          "registered_owner": registered_owner,
          "vehicle_colour": vehicle_colour,
          "vehicle_agreement": vehicle_agreement,
          "tab": tabpanel
        }
        updateLoanDetails(loanID, data);
      } else if (tabpanel == 6) {
        var payment_type = $("#payment_type").val();
        var repayment_bank_account_number1 = $("#repayment_bank_account_number1").val();
        var repayment_bank_account_number2 = $("#repayment_bank_account_number2").val();
        var repayment_bank_account_number3 = $("#repayment_bank_account_number3").val();
        var repayment_bank_account_number4 = $("#repayment_bank_account_number4").val();

        var repayment_bank_account_number = repayment_bank_account_number1 + "-" + repayment_bank_account_number2 + "-" + repayment_bank_account_number3 + "-" + repayment_bank_account_number4;
        var repayment_bank_account_name = $("#repayment_bank_account_name").val();
        var bank_name = $("#bank_name").val();
        var repayment_authorizer_name = $("#repayment_authorizer_name").val();
        var repayment_start_date = $("#repayment_start_date").val();
        repayment_start_date = repayment_start_date.split("/")[2] + "/" + repayment_start_date.split("/")[1] + "/" + repayment_start_date.split("/")[0];
        var repayment_frequency = $("#repayment_frequency").val();
        if ($('input[name="secure_sign_agreed"]:checked').length > 0) {
          var secure_sign_agreed = "1";
        } else {
          var secure_sign_agreed = "0";
        }
        if ($('input[name="repayment_bank_authorization"]:checked').length > 0) {
          var repayment_bank_authorization = "1";
        } else {
          var repayment_bank_authorization = "0";
        }
        if ($('input[name="repayment_authorization"]:checked').length > 0) {
          var repayment_authorization = "1";
        } else {
          var repayment_authorization = "0";
        }
        var data = {
          "payment_type": payment_type,
          "secure_sign_agreed": secure_sign_agreed,
          "repayment_bank_account_number": repayment_bank_account_number,
          "repayment_bank_account_name": repayment_bank_account_name,
          "repayment_bank_authorization": repayment_bank_authorization,
          "bank_name": bank_name,
          "repayment_authorizer_name": repayment_authorizer_name,
          "repayment_start_date": repayment_start_date,
          "repayment_frequency": repayment_frequency,
          "repayment_authorization": repayment_authorization,
          "tab": tabpanel
        }
        updateLoanDetails(loanID, data);
      }
    }

    function updateLoanDetails(loanID, data) {
      data.id = loanID;
      $.ajax({
        type: "POST",
        url: "{{url('edit-loan')}}",
        data: {
          "_token": "{{ csrf_token() }}",
          "data": data
        },
        success: function(res) {
          if (res) {
            alert("Data Saved Successfully");

          } else {

          }
        }
      });
    }

    function searchLoan() {
      var loan_number_search = $("#loan_number_search").val();
      if (loan_number_search == "") {
        swal({
          icon: 'error',
          title: "Oops...",
          text: "Please enter loan number to search... ",
          showConfirmButton: true,
          confirmButtonText: 'Ok',
          dangerMode: true,
        }, function() {
          $('html, body').animate({
            'scrollTop': $("#profileForm").position().top
          });
        });
      } else {
        // location.href="{{url('loan')}}/" + loan_number_search;
        $("#search_loan_forn").submit();
      }
    }

    function newLoan(){
      location.href="{{url('apply-now')}}";
    }
  </script>
  @include('styles')
</body>

</html>