@component('mail::message')
# Online Application

@component('mail::table')
| Getting to Know you       |             |
| ------------- |:-----------------:|
| Are you over 18 years of age?                 | {{ isset($mailData['is_over_18'])?$mailData['is_over_18']:"-" }}      |
| Residential status         | {{ isset($mailData['residential_status'])?$mailData['residential_status']:"-"  }} |
| Visa Expiry                | {{ isset($mailData['visa_expiry'])?$mailData['visa_expiry']:"-"  }} |
| Is this a joint application       | {{ isset($mailData['is_joint_application'])?$mailData['is_joint_application']:"-"  }} |

@endcomponent

@component('mail::table')
| Personal Information       |              |
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
| Years at this address      | {{ isset($mailData['years_at_current_from'])?$mailData['years_at_current_from']:"-/-/-"  }} - {{ isset($mailData['years_at_current_to'])?$mailData['years_at_current_to']:"-/-/-"  }} |
| Type of identification          | {{ isset($mailData['applicant_id_type'])?$mailData['applicant_id_type']:"-"  }} |
| Maritial Status   | {{ isset($mailData['applicant_marital_status'])?$mailData['applicant_marital_status']:"-"  }} |
| Number of dependents | {{ isset($mailData['applicant_no_of_dependents'])?$mailData['applicant_no_of_dependents']:"-"  }} |
@endcomponent

@component('mail::table')
| Contact Information       |             |
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
| Employment Details       |              |
| ------------- |:-----------------:|
| Employment status       | {{ isset($mailData['employment_status'])?$mailData['employment_status']:"-"  }}      |
| Job Title      | {{ isset($mailData['job_title'])?$mailData['job_title']:"-"  }} |
| Have you been in employment for longer than 6 months?      | {{ isset($mailData['duration_of_employment'])?$mailData['duration_of_employment']:"-"  }} |
| Employer name      | {{ isset($mailData['employer_name'])?$mailData['employer_name']:"-" }} |
| Employer contact number      | {{ isset($mailData['employer_contact_number'])?$mailData['employer_contact_number']:"-"  }} |
| Manager      | {{ isset($mailData['manager_name'])?$mailData['manager_name']:"-"  }} |
| Employment Period      | {{ isset($mailData['employment_period_from'])?$mailData['employment_period_from']:"-/-/-"  }} - {{ isset($mailData['employment_period_to'])?$mailData['employment_period_to']:"-/-/-"  }} |
| Income      | {{ isset($mailData['income'])?$mailData['income']:"-"  }} |
| Income frequency      | {{ isset($mailData['income_frequency'])?$mailData['income_frequency']:"-"  }} |
| Additional Income      | {{ isset($mailData['Is_additional_income'])?$mailData['Is_additional_income']:"-"  }} |
| Source      | {{ isset($mailData['additional_income_source'])?$mailData['additional_income_source']:"-"  }} |
| Amount of additional Income      | {{ isset($mailData['additional_income'])?$mailData['additional_income']:"-"  }} |
| Living cost      | {{ isset($mailData['living_cost_type'])?$mailData['living_cost_type']:"-"  }} |
| Amount      | {{ isset($mailData['living_cost_amount'])?$mailData['living_cost_amount']:"-"  }} |
| Payment Frequency      | {{ isset($mailData['livingcost_frequency'])?$mailData['livingcost_frequency']:"-"  }} |
@endcomponent

@component('mail::table')
| Vehicle Details       |              |
| ------------- |:-----------------:|
| Vehicle make      | {{ isset($mailData['vehicle_make'])?$mailData['vehicle_make']:"-"  }} |
| Vehicle model      | {{ isset($mailData['vehicle_model'])?$mailData['vehicle_model']:"-"  }} |
| Year      | {{ isset($mailData['vehicle_year'])?$mailData['vehicle_year']:"-"  }} |
| Vehicle Registration      | {{ isset($mailData['vehicle_registration'])?$mailData['vehicle_registration']:"-"  }} |
| Registration owner      | {{ isset($mailData['registered_owner'])?$mailData['registered_owner']:"-"  }} |
| Vehicle color      | {{ isset($mailData['vehicle_colour'])?$mailData['vehicle_colour']:"-"  }} |
| I give Smartcover Finance permission to use the above vehicle as a security for my loan.      | {{ isset($mailData['vehicle_agreement'])?$mailData['vehicle_agreement']:"-"  }} |
@endcomponent
@if(isset($mailData['is_joint_application']) && $mailData['is_joint_application'] == "yes")
@component('mail::table')
| Joint Applicant Details       |              |
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
| Years at this address      | {{ isset($mailData['jointapp_years_at_current_from'])?$mailData['jointapp_years_at_current_from']:"-/-/-"  }} - {{ isset($mailData['jointapp_years_at_current_to'])?$mailData['jointapp_years_at_current_to']:"-/-/-"  }} |
| Type of identification      | {{ isset($mailData['jointapp__id_type'])?$mailData['jointapp__id_type']:"-"  }} |
| Maritial Status      | {{ isset($mailData['jointapp_marital_status'])?$mailData['jointapp_marital_status']:"-"  }} |
| Number of dependents      | {{ isset($mailData['jointapp_no_of_dependents'])?$mailData['jointapp_no_of_dependents']:"-"  }} |
@endcomponent
@endif

@if(isset($mailData['is_joint_application']) && $mailData['is_joint_application'] == "yes")
@component('mail::table')
| Joint Applicant Contact Information       |             |
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
| Joint Applicant: Employment Details       |              |
| ------------- |:-----------------:|
| Employment status       | {{ isset($mailData['jointapp_employment_status'])?$mailData['jointapp_employment_status']:"-"  }}      |
| Job Title      | {{ isset($mailData['jointapp_job_title'])?$mailData['jointapp_job_title']:"-"  }} |
| Have you been in employment for longer than 6 months?      | {{ isset($mailData['jointapp_duration_of_employment'])?$mailData['jointapp_duration_of_employment']:"-"  }} |
| Employer name      | {{ isset($mailData['jointapp_employer_name'])?$mailData['jointapp_employer_name']:"-"  }} |
| Employer contact number      | {{ isset($mailData['jointapp_employer_contact_number'])?$mailData['jointapp_employer_contact_number']:"-"  }} |
| Manager      | {{ isset($mailData['jointapp_manager_name'])?$mailData['jointapp_manager_name']:"-"  }} |
| Employment Period      | {{ isset($mailData['jointapp_employment_period_from'])?$mailData['jointapp_employment_period_from']:"-/-/-"  }} - {{ isset($mailData['jointapp_employment_period_to'])?$mailData['jointapp_employment_period_to']:"-/-/-"  }} |
| Income      | {{ isset($mailData['jointapp_income'])?$mailData['jointapp_income']:"-"  }} |
| Income frequency      | {{ isset($mailData['jointapp_income_frequency'])?$mailData['jointapp_income_frequency']:"-"  }} |
| Additional Income      | {{ isset($mailData['jointapp_Is_additional_income'])?$mailData['jointapp_Is_additional_income']:"-"  }} |
| Source      | {{ isset($mailData['jointapp_additional_income_source'])?$mailData['jointapp_additional_income_source']:"-"  }} |
| Amount of additional Income      | {{ isset($mailData['jointapp_additional_income'])?$mailData['jointapp_additional_income']:"-"  }} |
| Living cost      | {{ isset($mailData['jointapp_living_cost_type'])?$mailData['jointapp_living_cost_type']:"-"  }} |
| Living cost Amount      | {{ isset($mailData['jointapp_living_cost_amount'])?$mailData['jointapp_living_cost_amount']:"-"  }} |
| Payment Frequency      | {{ isset($mailData['jointapp_livingcost_frequency'])?$mailData['jointapp_livingcost_frequency']:"-"  }} |
@endcomponent
@endif

@component('mail::table')
| Loan Details       |              |
| ------------- |:-----------------:|
| Loan amount       | {{ isset($mailData['loan_amount'])?$mailData['loan_amount']:"-"  }}      |
| Loan Reason      | {{ isset($mailData['loan_reason'])?$mailData['loan_reason']:"-"  }} |
| Name of Store (if any)      | {{ isset($mailData['loan_agent'])?$mailData['loan_agent']:"-"  }} |
| Prefferred Week Day      | {{ isset($mailData['preffered_week_day'])?$mailData['preffered_week_day']:"-"  }} |
| Prefferred Frequency      | {{ isset($mailData['repayment_frequency'])?$mailData['repayment_frequency']:"-" }} |
| Next Income Payday      | {{ isset($mailData['pay_day'])?$mailData['pay_day']:"-"  }} |
| Secured signing.      | {{ isset($mailData['secure_sign_agreed'])?"Secure Signing No":"Secure Signing Yes"  }} |
@endcomponent

@component('mail::table')
| Privacy Waiver       |             |
| ------------- |:-----------------:|
| I confirm that I have read and understood the document before proceeding.       | {{ isset($mailData['privacy_act_agreement'])?$mailData['privacy_act_agreement']:"-"  }}      |
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
