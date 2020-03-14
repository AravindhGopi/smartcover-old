<finPOWERConnect version="1.00">
<Accounts>
<finAccount version="1.00">
<AccountClass>LoanFT</AccountClass>
<AccountId></AccountId>
<AccountManagerUserId pk="65">Natalie</AccountManagerUserId>
<AccountTypeId pk="2">CCCFA</AccountTypeId>
<BrokerExternalPartyEmployeeClientEmploymentId/>
<BrokerExternalPartyId/>
<DateAccepted/>
<DateQuoted>{{ isset($mailData['date'])?$mailData['date']:""  }}</DateQuoted>
<DateSigned/>
<DealerExternalPartyEmployeeClientEmploymentId/>
<DealerExternalPartyId pk="255">SCL</DealerExternalPartyId>
<DepartmentId pk="1">SCL</DepartmentId>
<Description>{{ isset($mailData['vehicle_make'])?$mailData['vehicle_make']:"-"  }} {{ isset($mailData['vehicle_model'])?$mailData['vehicle_model']:"-"  }} {{ isset($mailData['vehicle_colour'])?$mailData['vehicle_colour']:"-"  }} {{ isset($mailData['vehicle_year'])?$mailData['vehicle_year']:"-"  }} {{ isset($mailData['vehicle_registration'])?$mailData['vehicle_registration']:"-"  }}</Description>
<Financial>
<finAccountCalc version="1.00">
<Calculation>
<AccountTypeId pk="2">CCCFA</AccountTypeId>
<Description>Opening</Description>
<OpeningDate>{{ isset($mailData['date'])?$mailData['date']:""  }}</OpeningDate>
<Properties>
<finAccountCalcProperties version="1.00">
<Properties/>
<Options>
<PaymentDirectDebitExcludeDateOpened>true</PaymentDirectDebitExcludeDateOpened>
</Options>
</finAccountCalcProperties>
</Properties>
<StatementCycle>6m11</StatementCycle>
<StatementDateNext>{{ isset($mailData['dateAfterSixMonth'])?$mailData['dateAfterSixMonth']:""  }}</StatementDateNext>
<StdTrans>
<finAccountStdTrans version="3.00">
<Items>
<I>
<E pk="22">LNCHP</E>
<V>{{ isset($mailData['loan_amount'])?$mailData['loan_amount']:""  }}</V>
</I>
<I>
<E pk="20">LNAPP</E>
<V>65</V>
</I>
<I>
<E pk="21">LNBKF</E>
<V>250</V>
</I>
<I>
<E pk="30">LNLPI</E>
</I>
</Items>
</finAccountStdTrans>
</StdTrans>
<DefaultInterestRate>6</DefaultInterestRate>
<DefaultInterestRateBasis>PlusRate</DefaultInterestRateBasis>
<InterestCycle>w</InterestCycle>
<InterestRate>19</InterestRate>
<MaturityDate/>
<PaymentCycle>Weekly</PaymentCycle>
<PaymentFirstDatePeriod>On Date</PaymentFirstDatePeriod>
<PaymentFirstDate>{{ isset($mailData['date'])?$mailData['date']:""  }}</PaymentFirstDate>
<StartupInterestToDate/>
<StartupInterestType/>
<Term>104w</Term>
<TermEntryMethod>NumberOfPayments</TermEntryMethod>
<NumberOfPayments>104</NumberOfPayments>
</Calculation>
</finAccountCalc>
</Financial>
<InsuranceInsurerExternalPartyId/>
<Name>{{ isset($mailData['applicant_surname'])?$mailData['applicant_surname']:""  }}, {{ isset($mailData['applicant_first_name'])?$mailData['applicant_first_name']:""  }} </Name>
<Clients>
<Client>
<finClient version="1.00">
<CreatedUserId/>
<CreatedUtcDate/>
<UpdatedUserId/>
<UpdatedUtcDate/>
<ClientId/>
<Active>true</Active>
<AddresseeName>{{ isset($mailData['applicant_title'])?$mailData['applicant_title']:""  }} {{ isset($mailData['applicant_first_name'])?$mailData['applicant_first_name']:""  }} {{ isset($mailData['applicant_surname'])?$mailData['applicant_surname']:""  }}</AddresseeName>
<AlertMessage/>
<ClientGroupId pk="4">C</ClientGroupId>
<ClientManagerUserId pk="65">Natalie</ClientManagerUserId>
<ClientTypeId pk="1">I</ClientTypeId>
<CommunicationGeneral>true</CommunicationGeneral>
<CommunicationGeneralEmail>true</CommunicationGeneralEmail>
<CommunicationGeneralLetter>true</CommunicationGeneralLetter>
<CommunicationGeneralSms>true</CommunicationGeneralSms>
<CommunicationGeneralPhoneVoice>true</CommunicationGeneralPhoneVoice>
<CommunicationMarketing>true</CommunicationMarketing>
<CommunicationMarketingEmail>true</CommunicationMarketingEmail>
<CommunicationMarketingLetter>true</CommunicationMarketingLetter>
<CommunicationMarketingSms>true</CommunicationMarketingSms>
<CommunicationMarketingPhoneVoice>true</CommunicationMarketingPhoneVoice>
<CommunicationFlags/>
<CommunicationOther1>false</CommunicationOther1>
<CommunicationOther2>false</CommunicationOther2>
<CommunicationOther3>false</CommunicationOther3>
<CommunicationOther4>false</CommunicationOther4>
<CreditRating/>
<CrossReference/>
<ExemptionCertificate/>
<ExemptionExpiryDate/>
<ExemptionIssueDate/>
<ExternalId/>
<ImageFileName/>
<IndustryCode/>
<Name>{{ isset($mailData['applicant_surname'])?$mailData['applicant_surname']:""  }}, {{ isset($mailData['applicant_first_name'])?$mailData['applicant_first_name']:""  }} </Name>
<Notes>Visa Expiry: {{ isset($mailData['visa_expiry'])?$mailData['visa_expiry']:"NA"  }}
, Best time to contact: {{ isset($mailData['best_time_to_contact'])?$mailData['best_time_to_contact']:"-"  }}
</Notes>
<Resident>true</Resident>
<Salutation/>
<Search0></Search0>
<Search1/>
<Search2/>
<Search3/>
<Search4/>
<SpecialType>None</SpecialType>
<Status>None</Status>
<TaxCategoryId pk="5">RE</TaxCategoryId>
<TaxCountry/>
<TaxNumber/>

<UserData>
<ISKeyValueList version="1.00">
<Item type="String" key="Dealer" userDefinedIndex="0">{{ isset($mailData['loan_agent'])?$mailData['loan_agent']:""  }}</Item>
<Item type="Double" key="Loan Amount" userDefinedIndex="1">{{ isset($mailData['loan_amount'])?$mailData['loan_amount']:""  }}</Item>
<Item type="String" key="Status" userDefinedIndex="2">Pending</Item>
<Item type="String" key="Car Rego" userDefinedIndex="3">{{ isset($mailData['vehicle_agreement'])?$mailData['vehicle_agreement']:"Vehicle Security - No"  }}</Item>
<Item type="String" key="Income" userDefinedIndex="4">{{ isset($mailData['total_income'])? $mailData['total_income']:"" }}</Item>
<Item type="Date" key="Application Date" userDefinedIndex="5">{{ isset($mailData['formattedDate'])?$mailData['formattedDate']:""  }}</Item>
<Item type="String" key="Account Type" userDefinedIndex="6">CCCFA</Item>
<Item type="String" key="Loan Reason" userDefinedIndex="7">{{ isset($mailData['loan_reason'])?$mailData['loan_reason']:""  }}</Item>
<Item type="String" key="Secured Signing" userDefinedIndex="8">{{ isset($mailData['secure_sign_agreed'])?"Secure Signing No":"Secure Signing Yes"  }}</Item>
<Item type="String" key="Privacy Waiver" userDefinedIndex="9">{{ isset($mailData['privacy_act_agreement'])?$mailData['privacy_act_agreement']." Agreed":"No"  }}</Item>
<Item type="Double" key="IncomeTotal">{{ isset($mailData['total_income'])? $mailData['total_income']:"" }}</Item>
<Item type="Double" key="ExpensesTotal">{{ isset($mailData['living_cost_amount'])?$mailData['living_cost_amount']:""  }}</Item>
<Item type="String" key="Notes">{{ isset($mailData['living_cost_type'])?"Living cost: ".$mailData['living_cost_type']:""  }}</Item>
<Item type="Double" key="Income">{{ isset($mailData['income'])?$mailData['income']:""  }}</Item>
<Item type="String" key="FrequencyPerAnnumIncome">{{ isset($mailData['income_frequency'])?$mailData['income_frequency']:""  }} </Item>
<Item type="Double" key="Additional Income"></Item>
<Item type="Double" key="Other Income">{{ isset($mailData['additional_income'])?$mailData['additional_income']:""  }}</Item>
<Item type="String" key="FrequencyPerAnnumOthIncome">{{ isset($mailData['Is_additional_income'])?$mailData['Is_additional_income']:""  }}</Item>
<Item type="String" key="NotesOthIncome">{{ isset($mailData['additional_income_source'])?$mailData['additional_income_source']:""  }}</Item>
<Item type="Double" key="Living Cost: Rent">{{ isset($mailData['living_cost_amount'])?$mailData['living_cost_amount']:""  }}</Item>
<Item type="String" key="FrequencyPerAnnumRent">{{ isset($mailData['livingcost_frequency'])?$mailData['livingcost_frequency']:""  }} </Item>
<Item type="Double" key="Liabilities"></Item>
</ISKeyValueList>
</UserData>
<UserDataWeb>
<ISKeyValueList version="1.00"/>
</UserDataWeb>
<WebAccess>false</WebAccess>
<DateOfBirth>{{ isset($mailData['applicant_birth_year'])?$mailData['applicant_birth_year']:""  }}-{{ isset($mailData['applicant_birth_month'])?$mailData['applicant_birth_month']:""  }}-{{ isset($mailData['applicant_birth_date'])?$mailData['applicant_birth_date']:""  }}</DateOfBirth>
<Dependants>{{ isset($mailData['applicant_no_of_dependents'])?$mailData['applicant_no_of_dependents']:""  }}</Dependants>
<FirstName>{{ isset($mailData['applicant_first_name'])?$mailData['applicant_first_name']:""  }}</FirstName>
<MiddleNames>{{ isset($mailData['applicant_middle_name'])?$mailData['applicant_middle_name']:""  }}</MiddleNames>
<LastName>{{ isset($mailData['applicant_surname'])?$mailData['applicant_surname']:""  }}</LastName>
<Gender>{{ isset($mailData['applicant_gender'])?$mailData['applicant_gender']:""  }}</Gender>
<IndividualNumber/>
<MaritalStatus>{{ isset($mailData['applicant_marital_status'])?$mailData['applicant_marital_status']:""  }}</MaritalStatus>
<Occupation>{{ isset($mailData['employment_status'])?$mailData['employment_status']:""  }}</Occupation>
<ResidentialStatus>{{ isset($mailData['residential_status'])?$mailData['residential_status']:""  }}</ResidentialStatus>
<Title>{{ isset($mailData['applicant_title'])?$mailData['applicant_title']:""  }}</Title>

<ContactMethods>

<ContactMethod>
<ContactMethodId>EMAIL</ContactMethodId>
<Value>{{ isset($mailData['applicant_email'])?$mailData['applicant_email']:""  }}</Value>
<EmailHtml>true</EmailHtml>
<Notes>Applicant</Notes>
<ValueType>Applicant</ValueType>

</ContactMethod>
@if(isset($mailData['applicant_landline']))
<ContactMethod>
<ContactMethodId>PHONE</ContactMethodId>
<Value>{{ isset($mailData['applicant_landline'])?$mailData['applicant_landline']:""  }}</Value>
<Notes>Applicant</Notes>
<ValueType>Applicant</ValueType>
</ContactMethod>
@endif

<ContactMethod>
<ContactMethodId>MOB</ContactMethodId>
<Value>{{ isset($mailData['applicant_mobile'])?$mailData['applicant_mobile']:""  }}</Value>
<Notes>Applicant</Notes>
<ValueType>Applicant</ValueType>
</ContactMethod>
@if(isset($mailData['applicant_work_phone']))
<ContactMethod>
<ContactMethodId>WORK</ContactMethodId>
<Value>{{ isset($mailData['applicant_work_phone'])?$mailData['applicant_work_phone']:""  }}</Value>
<Notes>Applicant</Notes>
<ValueType>Applicant</ValueType>
</ContactMethod>
@endif

<ContactMethod>
<ContactMethodId>NOKP</ContactMethodId>
<Value>{{ isset($mailData['referral_mobile'])?$mailData['referral_mobile']:""  }}</Value>
<Notes>Alternative Contact mobile</Notes>
<ValueType>Alternative Contact</ValueType>
</ContactMethod>
@if(isset($mailData['referral_landline']))
<ContactMethod>
<ContactMethodId>NOKP</ContactMethodId>
<Value>{{ isset($mailData['referral_landline'])?$mailData['referral_landline']:""  }}</Value>
<Notes>Alternative Contact</Notes>
<ValueType>Alternative Contact</ValueType>
</ContactMethod>
@endif

<ContactMethod>
<ContactMethodId>NOKN</ContactMethodId>
<Value>{{ isset($mailData['referral_first_name'])?$mailData['referral_first_name']:""  }} {{ isset($mailData['referral_surname'])?$mailData['referral_surname']:""  }}</Value>
<Notes>Alternative Contact</Notes>
<ValueType>Alternative Contact</ValueType>
</ContactMethod>

<ContactMethod>
<ContactMethodId>NOKA</ContactMethodId>
<Value>{{ isset($mailData['referral_street_number'])?$mailData['referral_street_number']:"" }} {{ isset($mailData['referral_street_name'])?$mailData['referral_street_name']:""  }}, {{ isset($mailData['referral_suburb'])?$mailData['referral_suburb']:""  }}, {{ isset($mailData['referral_city'])?$mailData['referral_city']:""  }} </Value>
<Notes>Alternative Contact</Notes>
<ValueType>Alternative Contact</ValueType>
</ContactMethod>

</ContactMethods>

<ContactAddresses>

<ContactAddress>
<ContactMethodId>AD</ContactMethodId>
<AddressPhysical>true</AddressPhysical>
<AddressPostal>true</AddressPostal>
<DeliveryType>0</DeliveryType>
<StreetAddressFull>{{ isset($mailData['current_street_number'])?$mailData['current_street_number']:""  }} {{ isset($mailData['current_street_address'])?$mailData['current_street_address']:""  }}</StreetAddressFull>
<Suburb>{{ isset($mailData['current_suburb'])?$mailData['current_suburb']:""  }}</Suburb>
<City>{{ isset($mailData['current_city'])?$mailData['current_city']:""  }}</City>
<PostCode>{{ isset($mailData['current_postcode'])?$mailData['current_postcode']:""  }}</PostCode>
<DateStart>{{ isset($mailData['years_at_current_from'])?$mailData['years_at_current_from']:""  }}</DateStart>
<DateStop/>
<Notes>Applicant</Notes>
<ValueType>Applicant</ValueType>
</ContactAddress>


</ContactAddresses>
<Employments>
<Employment>
<DateStart>{{ isset($mailData['employment_period_from'])?$mailData['employment_period_from']:"-"  }}</DateStart>
<DateStop />
<JobTitle>{{ isset($mailData['job_title'])?$mailData['job_title']:"-"  }}</JobTitle>
<Occupation>{{ isset($mailData['employment_status'])?$mailData['employment_status']:"-"  }}</Occupation>
<PhoneNumber>{{ isset($mailData['employer_contact_number'])?$mailData['employer_contact_number']:"-"  }}</PhoneNumber>
<OrganisationName>{{ isset($mailData['employer_name'])?$mailData['employer_name']:"-" }}</OrganisationName>
<Notes>Manager - {{ isset($mailData['manager_name'])?$mailData['manager_name']:"-"  }} , Employed for more than 3 months?: {{ isset($mailData['duration_of_employment'])?$mailData['duration_of_employment']:"No Data"  }}
</Notes>
</Employment>
</Employments>
</finClient>
<AccountHidden>false</AccountHidden>
<AccountRoleId pk="1">B</AccountRoleId>
<AccountSignatory>true</AccountSignatory>
<Addressee/>
<InsuranceInsurerExternalPartyId/>
<InsurancePolicyNumber/>
<InsurancePolicyType/>
<Notes/>
<PrivacyConsent>false</PrivacyConsent>
<RoleJoint>false</RoleJoint>
<Salutation/>
<SecurityParty>true</SecurityParty>
<SendDocuments>true</SendDocuments>
</Client>
@if(isset($mailData['is_joint_application']) && $mailData['is_joint_application'] == "yes")
<Client>
<finClient version="1.00">
<CreatedUserId/>
<CreatedUtcDate/>
<UpdatedUserId/>
<UpdatedUtcDate/>
<ClientId/>
<Active>true</Active>
<AddresseeName>{{ isset($mailData['jointapp_applicant_title'])?$mailData['jointapp_applicant_title']:""  }} {{ isset($mailData['jointapp_applicant_first_name'])?$mailData['jointapp_applicant_first_name']:""  }} {{ isset($mailData['jointapp_applicant_surname'])?$mailData['jointapp_applicant_surname']:""  }}</AddresseeName>
<AlertMessage/>
<ClientGroupId pk="4">C</ClientGroupId>
<ClientManagerUserId pk="65">Natalie</ClientManagerUserId>
<ClientTypeId pk="1">I</ClientTypeId>
<CommunicationGeneral>true</CommunicationGeneral>
<CommunicationGeneralEmail>true</CommunicationGeneralEmail>
<CommunicationGeneralLetter>true</CommunicationGeneralLetter>
<CommunicationGeneralSms>true</CommunicationGeneralSms>
<CommunicationGeneralPhoneVoice>true</CommunicationGeneralPhoneVoice>
<CommunicationMarketing>true</CommunicationMarketing>
<CommunicationMarketingEmail>true</CommunicationMarketingEmail>
<CommunicationMarketingLetter>true</CommunicationMarketingLetter>
<CommunicationMarketingSms>true</CommunicationMarketingSms>
<CommunicationMarketingPhoneVoice>true</CommunicationMarketingPhoneVoice>
<CommunicationFlags/>
<CommunicationOther1>false</CommunicationOther1>
<CommunicationOther2>false</CommunicationOther2>
<CommunicationOther3>false</CommunicationOther3>
<CommunicationOther4>false</CommunicationOther4>
<CreditRating/>
<CrossReference/>
<ExemptionCertificate/>
<ExemptionExpiryDate/>
<ExemptionIssueDate/>
<ExternalId/>
<ImageFileName/>
<IndustryCode/>
<Name>{{ isset($mailData['jointapp_applicant_surname'])?$mailData['jointapp_applicant_surname']:""  }}, {{ isset($mailData['jointapp_applicant_first_name'])?$mailData['jointapp_applicant_first_name']:""  }}</Name>
<Notes>{{ isset($mailData['jointapp_visa_expiry'])?$mailData['jointapp_visa_expiry']:""  }}
{{ isset($mailData['jointapp_best_time_to_contact'])?$mailData['jointapp_best_time_to_contact']:""  }}
</Notes>
<Resident>true</Resident>
<Salutation/>
<Search0></Search0>
<Search1/>
<Search2/>
<Search3/>
<Search4/>
<SpecialType>None</SpecialType>
<Status>None</Status>
<TaxCategoryId pk="5">RE</TaxCategoryId>
<TaxCountry/>
<TaxNumber/>

<UserData>
<ISKeyValueList version="1.00">
<Item type="String" key="Dealer" userDefinedIndex="0">{{ isset($mailData['loan_agent'])?$mailData['loan_agent']:""  }}</Item>
<Item type="Double" key="Loan Amount" userDefinedIndex="1">{{ isset($mailData['loan_amount'])?$mailData['loan_amount']:""  }}</Item>
<Item type="String" key="Status" userDefinedIndex="2">Pending</Item>
<Item type="String" key="Car Rego" userDefinedIndex="3">{{ isset($mailData['vehicle_agreement'])?$mailData['vehicle_agreement']:"Vehicle Security - No"  }}</Item>
<Item type="String" key="Income" userDefinedIndex="4">{{ isset($mailData['total_income'])? $mailData['total_income']:"" }}</Item>
<Item type="Date" key="Application Date" userDefinedIndex="5">{{ isset($mailData['formattedDate'])?$mailData['formattedDate']:""  }}</Item>
<Item type="String" key="Account Type" userDefinedIndex="6">CCCFA</Item>
<Item type="String" key="Loan Reason" userDefinedIndex="7">{{ isset($mailData['loan_reason'])?$mailData['loan_reason']:""  }}</Item>
<Item type="String" key="Secured Signing" userDefinedIndex="8">{{ isset($mailData['secure_sign_agreed'])?$mailData['secure_sign_agreed']." Yes":"No"  }}</Item>
<Item type="String" key="Privacy Waiver" userDefinedIndex="9">{{ isset($mailData['privacy_act_agreement'])?$mailData['privacy_act_agreement']." Agreed":"No"  }}</Item>
<Item type="Double" key="IncomeTotal">{{ isset($mailData['joint_app_total']) && $mailData['joint_app_total'] != 0 ?$mailData['joint_app_total']:""  }}</Item>
<Item type="Double" key="ExpensesTotal">{{ isset($mailData['jointapp_living_cost_amount'])?$mailData['jointapp_living_cost_amount']:""  }}</Item>
<Item type="String" key="Notes">{{ isset($mailData['jointapp_living_cost_type'])?$mailData['jointapp_living_cost_type']:""  }}</Item>
<Item type="Double" key="Income">{{ isset($mailData['jointapp_income'])?$mailData['jointapp_income']:""  }}</Item>
<Item type="String" key="FrequencyPerAnnumIncome">{{ isset($mailData['jointapp_income_frequency'])?$mailData['jointapp_income_frequency']:""  }}</Item>
<Item type="Double" key="Additional Income"></Item>
<Item type="Double" key="Other Income">{{ isset($mailData['jointapp_additional_income'])?$mailData['jointapp_additional_income']:""  }}</Item>
<Item type="String" key="FrequencyPerAnnumOthIncome">{{ isset($mailData['jointapp_Is_additional_income'])?$mailData['jointapp_Is_additional_income']:""  }}</Item>
<Item type="String" key="NotesOthIncome">{{ isset($mailData['jointapp_additional_income_source'])?$mailData['jointapp_additional_income_source']:""  }}</Item>
<Item type="Double" key="Living Cost: Rent">{{ isset($mailData['jointapp_living_cost_amount'])?$mailData['jointapp_living_cost_amount']:""  }}</Item>
<Item type="String" key="FrequencyPerAnnumRent">{{ isset($mailData['jointapp_livingcost_frequency'])?$mailData['jointapp_livingcost_frequency']:""  }}</Item>
<Item type="Double" key="Liabilities"></Item>
</ISKeyValueList>
</UserData>
<UserDataWeb>
<ISKeyValueList version="1.00"/>
</UserDataWeb>
<WebAccess>false</WebAccess>
<DateOfBirth>{{ isset($mailData['jointapp_applicant_birth_year'])?$mailData['jointapp_applicant_birth_year']:""  }}-{{ isset($mailData['jointapp_applicant_birth_month'])?$mailData['jointapp_applicant_birth_month']:""  }}-{{ isset($mailData['jointapp_applicant_birth_date'])?$mailData['jointapp_applicant_birth_date']:""  }}</DateOfBirth>
<Dependants>{{ isset($mailData['jointapp_no_of_dependents'])?$mailData['jointapp_no_of_dependents']:""  }}</Dependants>
<FirstName>{{ isset($mailData['jointapp_applicant_first_name'])?$mailData['jointapp_applicant_first_name']:""  }}</FirstName>
<MiddleNames>{{ isset($mailData['jointapp_applicant_middle_name'])?$mailData['jointapp_applicant_middle_name']:""  }}</MiddleNames>
<LastName>{{ isset($mailData['jointapp_applicant_surname'])?$mailData['jointapp_applicant_surname']:""  }}</LastName>
<Gender>{{ isset($mailData['jointapp_applicant_gender'])?$mailData['jointapp_applicant_gender']:""  }}</Gender>
<IndividualNumber/>
<MaritalStatus>{{ isset($mailData['jointapp_marital_status'])?$mailData['jointapp_marital_status']:""  }}</MaritalStatus>
<Occupation>{{ isset($mailData['jointapp_employment_status'])?$mailData['jointapp_employment_status']:""  }}</Occupation>
<ResidentialStatus>{{ isset($mailData['jointapp_residential_status'])?$mailData['jointapp_residential_status']:""  }}</ResidentialStatus>
<Title>{{ isset($mailData['jointapp_applicant_title'])?$mailData['jointapp_applicant_title']:""  }}</Title>


<ContactMethods>

<ContactMethod>
<ContactMethodId>EMAIL</ContactMethodId>
<Value>{{ isset($mailData['jointapp_applicant_email'])?$mailData['jointapp_applicant_email']:""  }}</Value>
<EmailHtml>true</EmailHtml>
<Notes>Joint Applicant</Notes>
<ValueType>Joint Applicant</ValueType>

</ContactMethod>
@if(isset($mailData['jointapp_applicant_landline']))
<ContactMethod>
<ContactMethodId>PHONE</ContactMethodId>
<Value>{{ isset($mailData['jointapp_applicant_landline'])?$mailData['jointapp_applicant_landline']:""  }}</Value>
<Notes>Joint Applicant</Notes>
<ValueType>JointApplicant</ValueType>
</ContactMethod>
@endif

<ContactMethod>
<ContactMethodId>MOB</ContactMethodId>
<Value>{{ isset($mailData['jointapp_applicant_mobile'])?$mailData['jointapp_applicant_mobile']:""  }}</Value>
<Notes>Joint Applicant</Notes>
<ValueType>Joint Applicant</ValueType>
</ContactMethod>
@if(isset($mailData['jointapp_applicant_work_phone']))
<ContactMethod>
<ContactMethodId>WORK</ContactMethodId>
<Value>{{ isset($mailData['jointapp_applicant_work_phone'])?$mailData['jointapp_applicant_work_phone']:""  }}</Value>
<Notes>Joint Applicant</Notes>
<ValueType>Joint Applicant</ValueType>
</ContactMethod>
@endif
<ContactMethod>
<ContactMethodId>NOKP</ContactMethodId>
<Value>{{ isset($mailData['jointapp_referral_mobile'])?$mailData['jointapp_referral_mobile']:""  }}</Value>
<Notes>Alternative Contact mobile</Notes>
<ValueType>Alternative Contact</ValueType>
</ContactMethod>
@if(isset($mailData['jointapp_referral_landline']))
<ContactMethod>
<ContactMethodId>NOKP</ContactMethodId>
<Value>{{ isset($mailData['jointapp_referral_landline'])?$mailData['jointapp_referral_landline']:""  }}</Value>
<Notes>Alternative Contact</Notes>
<ValueType>Alternative Contact</ValueType>
</ContactMethod>
@endif
<ContactMethod>
<ContactMethodId>NOKN</ContactMethodId>
<Value>{{ isset($mailData['jointapp_referral_first_name'])?$mailData['jointapp_referral_first_name']:""  }} {{ isset($mailData['jointapp_referral_surname'])?$mailData['jointapp_referral_surname']:""  }}</Value>
<Notes>Alternative Contact</Notes>
<ValueType>Alternative Contact</ValueType>
</ContactMethod>

<ContactMethod>
<ContactMethodId>NOKA</ContactMethodId>
<Value>{{ isset($mailData['jointapp_referral_street_number'])?$mailData['jointapp_referral_street_number']:"" }} {{ isset($mailData['jointapp_referral_street_name'])?$mailData['jointapp_referral_street_name']:""  }}, {{ isset($mailData['jointapp_referral_suburb'])?$mailData['jointapp_referral_suburb']:""  }}, {{ isset($mailData['jointapp_referral_city'])?$mailData['jointapp_referral_city']:""  }} </Value>
<Notes>Alternative Contact</Notes>
<ValueType>Alternative Contact</ValueType>
</ContactMethod>


</ContactMethods>
<ContactAddresses>
<ContactAddress>
<ContactMethodId>AD</ContactMethodId>
<AddressPhysical>true</AddressPhysical>
<AddressPostal>true</AddressPostal>
<DeliveryType>0</DeliveryType>
<StreetAddressFull>{{ isset($mailData['jointapp_current_street_number'])?$mailData['jointapp_current_street_number']:""  }} {{ isset($mailData['jointapp_current_street_address'])?$mailData['jointapp_current_street_address']:""  }}</StreetAddressFull>
<Suburb>{{ isset($mailData['jointapp_current_suburb'])?$mailData['jointapp_current_suburb']:""  }}</Suburb>
<City>{{ isset($mailData['jointapp_current_city'])?$mailData['jointapp_current_city']:""  }} </City>
<PostCode>{{ isset($mailData['jointapp_current_postcode'])?$mailData['jointapp_current_postcode']:""  }}</PostCode>
<DateStart>{{ isset($mailData['jointapp_years_at_current_from'])?$mailData['jointapp_years_at_current_from']:""  }} </DateStart>
<DateStop/>
<Notes> Joint Applicant</Notes>
<ValueType>Applicant</ValueType>
</ContactAddress>
</ContactAddresses>

<Employments>
<Employment>
<DateStart>{{ isset($mailData['jointapp_employment_period_from'])?$mailData['jointapp_employment_period_from']:""  }} </DateStart>
<DateStop />
<JobTitle>{{ isset($mailData['jointapp_job_title'])?$mailData['jointapp_job_title']:"-"  }}</JobTitle>
<Occupation>{{ isset($mailData['jointapp_employment_status'])?$mailData['jointapp_employment_status']:"-"  }}</Occupation>
<PhoneNumber>{{ isset($mailData['jointapp_employer_contact_number'])?$mailData['jointapp_employer_contact_number']:"-"  }}</PhoneNumber>
<OrganisationName>{{ isset($mailData['jointapp_employer_name'])?$mailData['jointapp_employer_name']:"-"  }}</OrganisationName>
<Notes>Manager - {{ isset($mailData['jointapp_manager_name'])?$mailData['jointapp_manager_name']:"-"  }} Employed for more than 3 months: {{ isset($mailData['jointapp_duration_of_employment'])?$mailData['jointapp_duration_of_employment']:"-"  }}
</Notes>
</Employment>
</Employments>
</finClient>
<AccountHidden>false</AccountHidden>
<AccountRoleId pk="1">B</AccountRoleId>
<AccountSignatory>true</AccountSignatory>
<Addressee/>
<InsuranceInsurerExternalPartyId/>
<InsurancePolicyNumber/>
<InsurancePolicyType/>
<Notes/>
<PrivacyConsent>false</PrivacyConsent>
<RoleJoint>true</RoleJoint>
<Salutation/>
<SecurityParty>true</SecurityParty>
<SendDocuments>true</SendDocuments>
</Client>
@endif
</Clients>
@if(isset($mailData['vehicle_agreement']) && $mailData['vehicle_agreement'] !="")
<SecurityStmt>
<finSecurityStmt version="2.00">
<CreatedUserId/>
<CreatedUtcDate/>
<UpdatedUserId/>
<UpdatedUtcDate/>
<SecurityStmtId/>
<Description>{{ isset($mailData['vehicle_make'])?$mailData['vehicle_make']:"-"  }} {{ isset($mailData['vehicle_model'])?$mailData['vehicle_model']:"-"  }} {{ isset($mailData['vehicle_colour'])?$mailData['vehicle_colour']:"-"  }} {{ isset($mailData['vehicle_year'])?$mailData['vehicle_year']:"-"  }} {{ isset($mailData['vehicle_registration'])?$mailData['vehicle_registration']:"-"  }}</Description>
<ExternalId/>
<Date>{{ isset($mailData['date'])?$mailData['date']:""  }}</Date>
<DateReview/>
<SecurityStmtGroupId pk="1">G</SecurityStmtGroupId>
<Notes/>
<SecurityItems>
<SecurityItem>
<SecurityTypeId pk="2">MV</SecurityTypeId>
<RegistrationNumber>{{ isset($mailData['vehicle_registration'])?$mailData['vehicle_registration']:"-"  }}</RegistrationNumber>
<Make>{{ isset($mailData['vehicle_make'])?$mailData['vehicle_make']:"-"  }}</Make>
<Model>{{ isset($mailData['vehicle_model'])?$mailData['vehicle_model']:"-"  }}</Model>
<Colour>{{ isset($mailData['vehicle_colour'])?$mailData['vehicle_colour']:"-"  }}</Colour>
<Year>{{ isset($mailData['vehicle_year'])?$mailData['vehicle_year']:"-"  }}</Year>
<OwnerClientId/>
<OwnerDetails>{{ isset($mailData['registered_owner'])?$mailData['registered_owner']:"-"  }}</OwnerDetails>
</SecurityItem>
</SecurityItems>

</finSecurityStmt>
</SecurityStmt>
@endif

<newChanges>
<DateFromCurrentAddress>{{ isset($mailData['current_address_from_year'])?$mailData['current_address_from_year']:"-"  }}-{{ isset($mailData['current_address_from_month'])?$mailData['current_address_from_month']."-01":"-"  }}</DateFromCurrentAddress>  
<IdentificationType>{{ isset($mailData['applicant_id_type'])?$mailData['applicant_id_type']:"-"  }}</IdentificationType>
<LicenceNumber>{{ isset($mailData['licence_number'])?$mailData['licence_number']:"-"  }}</LicenceNumber>
<licenceVersionNumber>{{ isset($mailData['version_number'])?$mailData['version_number']:"-"  }}</licenceVersionNumber>
<LicenceExpiryDate>{{ isset($mailData['licence_expiry_year'])?$mailData['licence_expiry_year']:"-"  }}-{{ isset($mailData['licence_expiry_month'])?$mailData['licence_expiry_month']:"-"  }}-{{ isset($mailData['licence_expiry_date'])?$mailData['licence_expiry_date']:"-"  }}</LicenceExpiryDate>
<PassportNumber>{{ isset($mailData['passport_number'])?$mailData['passport_number']:"-"  }}</PassportNumber>
<DateOfIssue>{{ isset($mailData['passport_issue_year'])?$mailData['passport_issue_year']:"-"  }}-{{ isset($mailData['passport_issue_month'])?$mailData['passport_issue_month']:"-"  }}-{{ isset($mailData['passport_issue_date'])?$mailData['passport_issue_date']:"-"  }}</DateOfIssue>
<PassportExpiryDate>{{ isset($mailData['passport_expiry_year'])?$mailData['passport_expiry_year']:"-"  }}-{{ isset($mailData['passport_expiry_month'])?$mailData['passport_expiry_month']:"-"  }}-{{ isset($mailData['passport_expiry_date'])?$mailData['passport_expiry_date']:"-"  }}</PassportExpiryDate>
<AccomodationType>{{ isset($mailData['accomodation_type'])?$mailData['accomodation_type']:"-"  }}</AccomodationType>
<ExpenseAmount>{{ isset($mailData['expense_amount'])?$mailData['expense_amount']:"-"  }}</ExpenseAmount>
<ExpenseFrequency>{{ isset($mailData['expense_frequency'])?$mailData['expense_frequency']:"-"  }}</ExpenseFrequency>
<!-- For Joint Applications-->
<JointAppDetails>
<DateFromCurrentAddress>{{ isset($mailData['jointapp_current_address_from_year'])?$mailData['jointapp_current_address_from_year']:"-"  }}-{{ isset($mailData['jointapp_current_address_from_month'])?$mailData['jointapp_current_address_from_month']."-01":"-"  }}</DateFromCurrentAddress>  
<IdentificationType>{{ isset($mailData['jointapp_id_type'])?$mailData['jointapp_id_type']:"-"  }}</IdentificationType>
<LicenceNumber>{{ isset($mailData['jointapp_licence_number'])?$mailData['jointapp_licence_number']:"-"  }}</LicenceNumber>
<licenceVersionNumber>{{ isset($mailData['jointapp_version_number'])?$mailData['jointapp_version_number']:"-"  }}</licenceVersionNumber>
<PassportNumber>{{ isset($mailData['jointapp_passport_number'])?$mailData['jointapp_passport_number']:"-"  }}</PassportNumber>
<DateOfIssue>{{ isset($mailData['jointapp_passport_issue_year'])?$mailData['jointapp_passport_issue_year']:"-"  }}-{{ isset($mailData['jointapp_passport_issue_month'])?$mailData['jointapp_passport_issue_month']:"-"  }}-{{ isset($mailData['jointapp_passport_issue_date'])?$mailData['jointapp_passport_issue_date']:"-"  }}</DateOfIssue>
<PassportExpiryDate>{{ isset($mailData['jointapp_passport_expiry_year'])?$mailData['jointapp_passport_expiry_year']:"-"  }}-{{ isset($mailData['jointapp_passport_expiry_month'])?$mailData['jointapp_passport_expiry_month']:"-"  }}-{{ isset($mailData['jointapp_passport_expiry_date'])?$mailData['jointapp_passport_expiry_date']:"-"  }}</PassportExpiryDate>
<AccomodationType>{{ isset($mailData['jointapp_accomodation_type'])?$mailData['jointapp_accomodation_type']:"-"  }}</AccomodationType>
<ExpenseAmount>{{ isset($mailData['jointapp_expense_amount'])?$mailData['jointapp_expense_amount']:"-"  }}</ExpenseAmount>
<ExpenseFrequency>{{ isset($mailData['jointapp_expense_frequency'])?$mailData['jointapp_expense_frequency']:"-"  }}</ExpenseFrequency>
</JointAppDetails>

<PaymentType>{{ isset($mailData['payment_type'])?$mailData['payment_type']:"-"  }}</PaymentType>
<LoanRepayments>
<BankAccountNumber>{{ isset($mailData['repayment_bank_account_number1'])?$mailData['repayment_bank_account_number1']:"-"  }}-{{ isset($mailData['repayment_bank_account_number2'])?$mailData['repayment_bank_account_number2']:"-"  }}-{{ isset($mailData['repayment_bank_account_number3'])?$mailData['repayment_bank_account_number3']:"-"  }}-{{ isset($mailData['repayment_bank_account_number4'])?$mailData['repayment_bank_account_number4']:"-"  }}</BankAccountNumber>
<AccountName>{{ isset($mailData['repayment_bank_account_name'])?$mailData['repayment_bank_account_name']:"-"  }}</AccountName>
<AccountNameCheck>{{ isset($mailData['repayment_bank_authorization'])?$mailData['repayment_bank_authorization']:"-"  }}</AccountNameCheck>
<NameOfTheAuthorizer>{{ isset($mailData['repayment_authorizer_name'])?$mailData['repayment_authorizer_name']:"-"  }}</NameOfTheAuthorizer>
<PaymentStartDate>{{ isset($mailData['payment_start_date_xml'])?$mailData['payment_start_date_xml']:"-"  }}</PaymentStartDate>
<PaymentFrequency>{{ isset($mailData['repayment_frequency'])?$mailData['repayment_frequency']:"-"  }}</PaymentFrequency>
</LoanRepayments>
</newChanges>
</finAccount>
</Accounts>
</finPOWERConnect>
