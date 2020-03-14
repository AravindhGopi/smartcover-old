@component('mail::message')
# Online Application
<br/>
@component('mail::table')
###Getting to Know you 
|       |             |
| ------------- |:-----------------:|
| Are you over 18 years of age?                 | {{ isset($mailData['is_over_18'])?$mailData['is_over_18']:"-" }}      |
| Residential status         | {{ isset($mailData['residential_status'])?$mailData['residential_status']:"-"  }} |
| Visa Expiry                | {{ isset($mailData['visa_expiry'])?$mailData['visa_expiry']:"-"  }} |
| Is this a joint application       | {{ isset($mailData['is_joint_application'])?$mailData['is_joint_application']:"-"  }} |

@endcomponent

@component('mail::table')
###Personal Information
|        |              |
| ------------- |:-----------------:|
| Title            | {{ isset($mailData['applicant_title'])?$mailData['applicant_title']:"-"  }}      |
| Gender            | {{ isset($mailData['applicant_gender'])?$mailData['applicant_gender']:"-"  }}    |
| First name       | {{ isset($mailData['applicant_first_name'])?$mailData['applicant_first_name']:"-"  }} |
| Middle name      | {{ isset($mailData['applicant_middle_name'])?$mailData['applicant_middle_name']:"-"  }} |
| Surname          | {{ isset($mailData['applicant_surname'])?$mailData['applicant_surname']:"-"  }} |
| Date of birth    | {{ isset($mailData['applicant_birth_date'])?$mailData['applicant_birth_date']:"-"  }} / {{ isset($mailData['applicant_birth_month'])?$mailData['applicant_birth_month']:"-"  }} / {{ isset($mailData['applicant_birth_year'])?$mailData['applicant_birth_year']:"-"  }} |
| Street number      | {{ isset($mailData['current_street_number'])?$mailData['current_street_number']:"-"  }} |
| Street Address     | {{ isset($mailData['current_street_address'])?$mailData['current_street_address']:"-"  }} |
| Suburb             | {{ isset($mailData['current_suburb'])?$mailData['current_suburb']:"-"  }} |
| Town/city               | {{ isset($mailData['current_city'])?$mailData['current_city']:"-"  }} |
| Postcode           | {{ isset($mailData['current_postcode'])?$mailData['current_postcode']:"-"  }} |
| Time at this address      | {{ isset($mailData['current_address_from_month'])?"01/".$mailData['current_address_from_month']:"-/-"  }} / {{ isset($mailData['current_address_from_year'])?$mailData['current_address_from_year']:"-"  }} |
| Type of identification          | {{ isset($mailData['applicant_id_type'])?$mailData['applicant_id_type']:"-"  }} |
| Maritial Status   | {{ isset($mailData['applicant_marital_status'])?$mailData['applicant_marital_status']:"-"  }} |
| Number of dependents | {{ isset($mailData['applicant_no_of_dependents'])?$mailData['applicant_no_of_dependents']:"-"  }} |
@if($mailData['applicant_id_type'] == "NZ Drivers License")
| Licence Number | {{ isset($mailData['licence_number'])?$mailData['licence_number']:"-"  }} |
| Version Number | {{ isset($mailData['version_number'])?$mailData['version_number']:"-"  }} |
| Licence Expiry Date | {{ isset($mailData['licence_expiry_date'])?$mailData['licence_expiry_date']:"-"  }} / {{ isset($mailData['licence_expiry_month'])?$mailData['licence_expiry_month']:"-"  }} / {{ isset($mailData['licence_expiry_year'])?$mailData['licence_expiry_year']:"-"  }} |
@else
| Passport Number | {{ isset($mailData['passport_number'])?$mailData['passport_number']:"-"  }} |
| Date Of Issue | {{ isset($mailData['passport_issue_date'])?$mailData['passport_issue_date']:"-"  }} / {{ isset($mailData['passport_issue_month'])?$mailData['passport_issue_month']:"-"  }} / {{ isset($mailData['passport_issue_year'])?$mailData['passport_issue_year']:"-"  }} |
| Expiry Date | {{ isset($mailData['passport_expiry_date'])?$mailData['passport_expiry_date']:"-"  }} / {{ isset($mailData['passport_expiry_month'])?$mailData['passport_expiry_month']:"-"  }} / {{ isset($mailData['passport_expiry_year'])?$mailData['passport_expiry_year']:"-"  }} |
@endif
@endcomponent

@component('mail::table')
###Contact Information
|        |             |
| ------------- |:-----------------:|
| Email        | {{ isset($mailData['applicant_email'])?$mailData['applicant_email']:"-"  }}      |
| Mobile       | {{ isset($mailData['applicant_mobile'])?$mailData['applicant_mobile']:"-"  }} |
| Landline     | {{ isset($mailData['applicant_landline'])?$mailData['applicant_landline']:"-"  }} |
| Work   | {{ isset($mailData['applicant_work_phone'])?$mailData['applicant_work_phone']:"-"  }} |
| Best Time to contact   | {{ isset($mailData['best_time_to_contact'])?$mailData['best_time_to_contact']:"-"  }} |
| Alternative Contact Firstname    | {{ isset($mailData['referral_first_name'])?$mailData['referral_first_name']:"-"  }} |
| Alternative Contact Surname        | {{ isset($mailData['referral_surname'])?$mailData['referral_surname']:"-"  }} |
| Alternative Contact Street number  | {{ isset($mailData['referral_street_number'])?$mailData['referral_street_number']:"-" }} |
| Alternative Contact Street name    | {{ isset($mailData['referral_street_name'])?$mailData['referral_street_name']:"-"  }} |
| Alternative Contact Suburb         | {{ isset($mailData['referral_suburb'])?$mailData['referral_suburb']:"-"  }} |
| Alternative Contact Town/City           | {{ isset($mailData['referral_city'])?$mailData['referral_city']:"-"  }} |
| Alternative Contact Landline       | {{ isset($mailData['referral_landline'])?$mailData['referral_landline']:"-"  }} |
| Alternative Contact Mobile         | {{ isset($mailData['referral_mobile'])?$mailData['referral_mobile']:"-"  }} |
@endcomponent

@component('mail::table')
###Employment Details
|        |              |
| ------------- |:-----------------:|
| Employment status       | {{ isset($mailData['employment_status'])?$mailData['employment_status']:"-"  }}      |
@if($mailData['employment_status'] == "Full Time Employed" || $mailData['employment_status'] == "Part Time Employed")
| Job Title      | {{ isset($mailData['job_title'])?$mailData['job_title']:"-"  }} |
| Have you been in employment for longer than 6 months?      | {{ isset($mailData['duration_of_employment'])?$mailData['duration_of_employment']:"-"  }} |
| Employer name      | {{ isset($mailData['employer_name'])?$mailData['employer_name']:"-" }} |
| Employer contact number      | {{ isset($mailData['employer_contact_number'])?$mailData['employer_contact_number']:"-"  }} |
| Manager      | {{ isset($mailData['manager_name'])?$mailData['manager_name']:"-"  }} |
| Employment Period      | {{ isset($mailData['employment_period_from'])?$mailData['employment_period_from']:"-/-/-"  }}|
@endif
| Income      | {{ isset($mailData['income'])?$mailData['income']:"-"  }} |
| Income frequency      | {{ isset($mailData['income_frequency'])?$mailData['income_frequency']:"-"  }} |
| additional Income      | {{ isset($mailData['additional_income'])?$mailData['additional_income']:"-"  }} |
| Accomodation Type      | {{ isset($mailData['accomodation_type'])?$mailData['accomodation_type']:"-"  }} |
| Expense Amount      | {{ isset($mailData['expense_amount'])?$mailData['expense_amount']:"-"  }} |
| Expense Frequency      | {{ isset($mailData['expense_frequency'])?$mailData['expense_frequency']:"-"  }} |
@endcomponent

@component('mail::table')
###Vehicle Details
|        |              |
| ------------- |:-----------------:|
| Vehicle make      | {{ isset($mailData['vehicle_make'])?$mailData['vehicle_make']:"-"  }} |
| Vehicle model      | {{ isset($mailData['vehicle_model'])?$mailData['vehicle_model']:"-"  }} |
| Year      | {{ isset($mailData['vehicle_year'])?$mailData['vehicle_year']:"-"  }} |
| Vehicle Registration      | {{ isset($mailData['vehicle_registration'])?$mailData['vehicle_registration']:"-"  }} |
| Registration owner      | {{ isset($mailData['registered_owner'])?$mailData['registered_owner']:"-"  }} |
| Vehicle color      | {{ isset($mailData['vehicle_colour'])?$mailData['vehicle_colour']:"-"  }} |
| I give Smartcover Finance permission to <br/> use the above vehicle as a security for my loan.      | {{ isset($mailData['vehicle_agreement'])?$mailData['vehicle_agreement']:"-"  }} |
@endcomponent
@if(isset($mailData['is_joint_application']) && $mailData['is_joint_application'] == "yes")
@component('mail::table')
###Joint Applicant Details
|        |              |
| ------------- |:-----------------:|
| Residential status       | {{ isset($mailData['jointapp_residential_status'])?$mailData['jointapp_residential_status']:"-"  }}      |
| Visa Expiry      | {{ isset($mailData['jointapp_visa_expiry'])?$mailData['jointapp_visa_expiry']:"-"  }} |
| Title      | {{ isset($mailData['jointapp_applicant_title'])?$mailData['jointapp_applicant_title']:"-"  }} |
| Gender      | {{ isset($mailData['jointapp_applicant_gender'])?$mailData['jointapp_applicant_gender']:""  }} |
| First name      | {{ isset($mailData['jointapp_applicant_first_name'])?$mailData['jointapp_applicant_first_name']:"-"  }} |
| Middle name      | {{ isset($mailData['jointapp_applicant_middle_name'])?$mailData['jointapp_applicant_middle_name']:"-"  }} |
| Surname      | {{ isset($mailData['jointapp_applicant_surname'])?$mailData['jointapp_applicant_surname']:"-"  }} |
| Date of birth    | {{ isset($mailData['jointapp_applicant_birth_date'])?$mailData['jointapp_applicant_birth_date']:"-"  }} / {{ isset($mailData['jointapp_applicant_birth_month'])?$mailData['jointapp_applicant_birth_month']:"-"  }} / {{ isset($mailData['jointapp_applicant_birth_year'])?$mailData['jointapp_applicant_birth_year']:"-"  }} |
| Street number      | {{ isset($mailData['jointapp_current_street_number'])?$mailData['jointapp_current_street_number']:"-"  }} |
| Street Address      | {{ isset($mailData['jointapp_current_street_address'])?$mailData['jointapp_current_street_address']:"-"  }} |
| Suburb      | {{ isset($mailData['jointapp_current_suburb'])?$mailData['jointapp_current_suburb']:"-"  }} |
| Town/city      | {{ isset($mailData['jointapp_current_city'])?$mailData['jointapp_current_city']:"-"  }} |
| Postcode      | {{ isset($mailData['jointapp_current_postcode'])?$mailData['jointapp_current_postcode']:"-"  }} |
| Time at this address      | {{ isset($mailData['jointapp_current_address_from_month'])?"01/".$mailData['jointapp_current_address_from_month']:"-/-"  }} / {{ isset($mailData['jointapp_current_address_from_year'])?$mailData['jointapp_current_address_from_year']:"-"  }} |
| Type of identification      | {{ isset($mailData['jointapp_id_type'])?$mailData['jointapp_id_type']:"-"  }} |
| Maritial Status      | {{ isset($mailData['jointapp_marital_status'])?$mailData['jointapp_marital_status']:"-"  }} |
| Number of dependents      | {{ isset($mailData['jointapp_no_of_dependents'])?$mailData['jointapp_no_of_dependents']:"-"  }} |
@if($mailData['jointapp_id_type'] == "NZ Drivers License")
| Licence Number | {{ isset($mailData['jointapp_licence_number'])?$mailData['jointapp_licence_number']:"-"  }} |
| Version Number | {{ isset($mailData['jointapp_version_number'])?$mailData['jointapp_version_number']:"-"  }} |
| Licence Expiry Date | {{ isset($mailData['jointapp_licence_expiry_date'])?$mailData['jointapp_licence_expiry_date']:"-"  }} / {{ isset($mailData['jointapp_licence_expiry_month'])?$mailData['jointapp_licence_expiry_month']:"-"  }} / {{ isset($mailData['jointapp_licence_expiry_year'])?$mailData['jointapp_licence_expiry_year']:"-"  }} |
@else
| Passport Number | {{ isset($mailData['jointapp_passport_number'])?$mailData['jointapp_passport_number']:"-"  }} |
| Date Of Issue | {{ isset($mailData['jointapp_passport_issue_date'])?$mailData['jointapp_passport_issue_date']:"-"  }} / {{ isset($mailData['jointapp_passport_issue_month'])?$mailData['jointapp_passport_issue_month']:"-"  }} / {{ isset($mailData['jointapp_passport_issue_year'])?$mailData['jointapp_passport_issue_year']:"-"  }} |
| Expiry Date | {{ isset($mailData['jointapp_passport_expiry_date'])?$mailData['jointapp_passport_expiry_date']:"-"  }} / {{ isset($mailData['jointapp_passport_expiry_month'])?$mailData['jointapp_passport_expiry_month']:"-"  }} / {{ isset($mailData['jointapp_passport_expiry_year'])?$mailData['jointapp_passport_expiry_year']:"-"  }} |
@endif
@endcomponent
@endif

@if(isset($mailData['is_joint_application']) && $mailData['is_joint_application'] == "yes")
@component('mail::table')
###Joint Applicant Contact Information
|        |             |
| ------------- |:-----------------:|
| Email        | {{ isset($mailData['jointapp_applicant_email'])?$mailData['jointapp_applicant_email']:"-"  }}      |
| Mobile       | {{ isset($mailData['jointapp_applicant_mobile'])?$mailData['jointapp_applicant_mobile']:"-"  }} |
| Landline     | {{ isset($mailData['jointapp_applicant_landline'])?$mailData['jointapp_applicant_landline']:"-"  }} |
| Work   | {{ isset($mailData['jointapp_applicant_work_phone'])?$mailData['jointapp_applicant_work_phone']:"-"  }} |
| Best Time to contact   | {{ isset($mailData['jointapp_best_time_to_contact'])?$mailData['jointapp_best_time_to_contact']:"-"  }} |
| Alternative Contact Firstname    | {{ isset($mailData['jointapp_referral_first_name'])?$mailData['jointapp_referral_first_name']:"-"  }} |
| Alternative Contact Surname        | {{ isset($mailData['jointapp_referral_surname'])?$mailData['jointapp_referral_surname']:"-"  }} |
| Alternative Contact Street number  | {{ isset($mailData['jointapp_referral_street_number'])?$mailData['referral_street_number']:"-" }} |
| Alternative Contact Street name    | {{ isset($mailData['jointapp_referral_street_name'])?$mailData['jointapp_referral_street_name']:"-"  }} |
| Alternative Contact Suburb         | {{ isset($mailData['jointapp_referral_suburb'])?$mailData['jointapp_referral_suburb']:"-"  }} |
| Alternative Contact Town/City           | {{ isset($mailData['jointapp_referral_city'])?$mailData['jointapp_referral_city']:"-"  }} |
| Alternative Contact Landline       | {{ isset($mailData['jointapp_referral_landline'])?$mailData['jointapp_referral_landline']:"-"  }} |
| Alternative Contact Mobile         | {{ isset($mailData['jointapp_referral_mobile'])?$mailData['jointapp_referral_mobile']:"-"  }} |
@endcomponent
@endif

@if(isset($mailData['is_joint_application']) && $mailData['is_joint_application'] == "yes")
@component('mail::table')
###Joint Applicant: Employment Details
|        |              |
| ------------- |:-----------------:|
| Employment status       | {{ isset($mailData['jointapp_employment_status'])?$mailData['jointapp_employment_status']:"-"  }}      |
@if($mailData['jointapp_employment_status'] == "Full Time Employed" || $mailData['jointapp_employment_status'] == "Part Time Employed")
| Job Title      | {{ isset($mailData['jointapp_job_title'])?$mailData['jointapp_job_title']:"-"  }} |
| Have you been in employment for longer than 6 months?      | {{ isset($mailData['jointapp_duration_of_employment'])?$mailData['jointapp_duration_of_employment']:"-"  }} |
| Employer name      | {{ isset($mailData['jointapp_employer_name'])?$mailData['jointapp_employer_name']:"-"  }} |
| Employer contact number      | {{ isset($mailData['jointapp_employer_contact_number'])?$mailData['jointapp_employer_contact_number']:"-"  }} |
| Manager      | {{ isset($mailData['jointapp_manager_name'])?$mailData['jointapp_manager_name']:"-"  }} |
| Employment Period      | {{ isset($mailData['jointapp_employment_period_from'])?$mailData['jointapp_employment_period_from']:"-/-/-"  }}|
@endif
| Income      | {{ isset($mailData['jointapp_income'])?$mailData['jointapp_income']:"-"  }} |
| Income frequency      | {{ isset($mailData['jointapp_income_frequency'])?$mailData['jointapp_income_frequency']:"-"  }} |
| | additional Income      | {{ isset($mailData['jointapp_additional_income'])?$mailData['jointapp_additional_income']:"-"  }} |
| Accomodation Type      | {{ isset($mailData['jointapp_accomodation_type'])?$mailData['jointapp_accomodation_type']:"-"  }} |
| Expense Amount      | {{ isset($mailData['jointapp_expense_amount'])?$mailData['jointapp_expense_amount']:"-"  }} |
| Expense Frequency      | {{ isset($mailData['jointapp_expense_frequency'])?$mailData['jointapp_expense_frequency']:"-"  }} |
@endcomponent
@endif

@component('mail::table')
###Loan Details
|        |              |
| ------------- |:-----------------:|
| Loan amount       | {{ isset($mailData['loan_amount'])?$mailData['loan_amount']:"-"  }}      |
| Loan Reason      | {{ isset($mailData['loan_reason'])?$mailData['loan_reason']:"-"  }} |
| Name of Store (if any)      | {{ isset($mailData['loan_agent'])?$mailData['loan_agent']:"-"  }} |
| Payment Type     | {{ isset($mailData['payment_type'])?$mailData['payment_type']:"-"  }} |
@endcomponent

@if($mailData['payment_type'] == "Direct Debit")
@component('mail::table')
###Loan Repayment Details
|        |              |          |
| ------------- |:-----------------:|---------------:|
| Bank Account Number       | {{ isset($mailData['repayment_bank_account_number1'])?$mailData['repayment_bank_account_number1']:"-"  }} - {{ isset($mailData['repayment_bank_account_number2'])?$mailData['repayment_bank_account_number2']:"-"  }} - {{ isset($mailData['repayment_bank_account_number3'])?$mailData['repayment_bank_account_number3']:"-"  }} - {{ isset($mailData['repayment_bank_account_number4'])?$mailData['repayment_bank_account_number4']:"-"  }}    |
| Account Name      | {{ isset($mailData['repayment_bank_account_name'])?$mailData['repayment_bank_account_name']:"-"  }} | {{ isset($mailData['repayment_bank_authorization'])?$mailData['repayment_bank_authorization']:"-"  }}      |
| Name of the Authorizer      | {{ isset($mailData['repayment_authorizer_name'])?$mailData['repayment_authorizer_name']:"-"  }} | {{ isset($mailData['repayment_authorization'])?$mailData['repayment_authorization']:"-"  }}      |
| Payment Start Date      | {{ isset($mailData['repayment_start_date'])?$mailData['repayment_start_date']:"-"  }} |
| Prefferred Frequency      | {{ isset($mailData['repayment_frequency'])?$mailData['repayment_frequency']:"-" }} |
@endcomponent
@endif

@component('mail::table')
###Privacy Waiver
|        |             |
| ------------- |:-----------------:|
| I confirm that I have read and understood the document before proceeding.       | 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
