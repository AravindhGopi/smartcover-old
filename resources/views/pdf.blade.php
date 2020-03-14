
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="Spicy dezyn" />
    <title>SmartCover Loan Application</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>

    <div style="width: 100%;margin: 0 auto;">
        <div>
            <form id="profileForm" name="profileForm" method="post" enctype="multipart/form-data" action="http://127.0.0.1:8000/profile-form" style="text-align: center;">
            <fieldset data-step="13" id="loanRepaymentTab">
                <h3 style="margin-bottom: 0px;font-family: sans-serif;font-size: 20px;text-align: left; margin-left: 25px;">Loan Repayments</h3>
                <h5 style="font-family: sans-serif;font-size: 17px;text-align: left;margin-left: 25px;">Your Bank Account Details</h5>
                <div>
                    <div style="text-align: left;margin-left: 13px;margin-bottom: 15px;">
                        <label for="repayment_bank_account_number"style="text-align: left;margin-left: 13px;margin-bottom: 10px;">Bank Account Number<sup>*</sup></label>
                    </div>
                    <div>
                        <input type="text" style="width:130px;height:30px; margin-left:30px;text-align: left;" maxlength="2" name="repayment_bank_account_number1" id="repayment_bank_account_number1" value="{{$AC1}}">
                        <input type="text" style="width:130px;height:30px; margin-left:30px;text-align: left;" maxlength="2" name="repayment_bank_account_number1" id="repayment_bank_account_number1" value="{{$AC2}}">
                        <input type="text" style="width:130px;height:30px; margin-left:30px;text-align: left;" maxlength="2" name="repayment_bank_account_number1" id="repayment_bank_account_number1" value="{{$AC3}}">
                        <input type="text" style="width:130px;height:30px; margin-left:30px;text-align: left;" maxlength="2" name="repayment_bank_account_number1" id="repayment_bank_account_number1" value="{{$AC4}}">
                    </div>
                    <div style="text-align: left;margin-left: 13px;margin-bottom: 15px;">
                        <label for="repayment_bank_account_number"style="text-align: left;margin-left: 13px;margin-bottom: 10px;">Account Name<sup>*</sup></label>
                    </div>
                    <div>
                        <input type="text" style="width:647px;height:30px; margin-left:30px;text-align: left;" maxlength="2" name="repayment_bank_account_number1" id="repayment_bank_account_number1" value="{{$ACName}}">
                    </div>
                        <div style="text-align: left;margin-left: 13px;margin-bottom: 15px;">
                                        <label style="margin-bottom: 30px;">
                                            <input type="checkbox" checked style="text-align: left;margin-left: 13px;margin-bottom: 10px;">
                                            I am authorized to operate this bank account independently.</label>             
                        </div>
                    <div style="text-align: left;margin-left: 13px;margin-bottom: 15px;">
                        <label for="repayment_bank_account_number"style="text-align: left;margin-left: 13px;margin-bottom: 10px;">Name of the Authorizer<sup>*</sup></label>
                    </div>
                    <div>
                        <input type="text" style="width:647px;height:30px; margin-left:30px;text-align: left;" maxlength="2" name="repayment_bank_account_number1" id="repayment_bank_account_number1" value="{{$AuthorizerName}}">
                    </div>
                    <div style="font-size:12px; text-align: justify; font-weight:normal; padding: 0px 30px; margin-bottom: 10px;width:649px;margin-top: 10px;" >It’s a legal requirement that you must be the named bank account holder or have formal authority to  operate the bank account independently so you can set up a direct debit. If you are not authorized to operate this bank account, you can call us on 0508 738 765 to request a direct debit form or contact us to arrange  alternative payment arrangements.
                    </div>
                    <div style="text-align: left;margin-left: 13px;margin-bottom: 15px;">
                        <label for="repayment_bank_account_number"style="text-align: left;margin-left: 13px;margin-bottom: 10px;">Payment Start Date<sup>*</sup></label>
                    </div>
                    <div>
                        <input type="text" style="width:647px;height:30px; margin-left:30px;text-align: left;" maxlength="2" name="repayment_bank_account_number1" id="repayment_bank_account_number1" value="{{$StartDate}}">
                    </div>
                    <div style="font-size:14px; text-align: justify; font-weight:normal; padding: 0px 30px; margin-bottom: 10px;width:649px;margin-top: 10px;" >Select from the available dates for when you'd like your payments to start
                    </div>
                    <div style="text-align: left;margin-left: 13px;margin-bottom: 15px;">
                        <label for="repayment_bank_account_number"style="text-align: left;margin-left: 13px;margin-bottom: 10px;">Preferred Frequency<sup>*</sup>(Weekly, Fortnightly, Monthly)</label>
                    </div>
                    <div>
                        <input type="text" style="width:647px;height:30px; margin-left:30px;text-align: left;" maxlength="2" name="repayment_bank_account_number1" id="repayment_bank_account_number1" value="{{$Frequency}}">
                    </div>
                    <div style="font-size:14px; text-align: justify; font-weight:normal; padding: 0px 30px; margin-bottom: 5px;width:649px;margin-top: 10px;" >Your payments will be taken on the same day each week, fortnight or month, or as close to as possible.
                    </div>                    
                </div>
                    <div style="border: 1px solid #cccccc; border-radius: 8px;margin: 0px 27px;width: 655px;">
                                <div style="padding: 0px 10px;">
                                    <p style="text-align: justify;padding: 0px;font-size: 14px;"><b>Please Note:</b> The start date you choose may alter depending on when the contract is signed, and loan process is complete. A full telephone disclousure will take place before the contract is finalized to discuss the payment schedule and direct debit confirmation letter will be sent to the postal address supplied once the loan has been opened.</p>
                                </div>
                            </div>
                        <div style="font-size:15px; text-align: justify; padding: 0px 30px; margin-bottom: 10px;width:649px;margin-top: 5px;">
                        <input type="checkbox" checked >I agree to the direct debit terms and conditions. I authorize Smartcover Finance to process direct debits to my nominated account,and
                    I authorize my bank to accept these payments. I’m aware that I can contact Smartcover Finance on 0508 738 765 to change/cancel my payment method at any time.*
                    </div>
                    <div style="font-size:12px; text-align: justify; font-weight:normal; padding: 0px 30px; margin-bottom: 10px;width:649px;margin-top: 10px;" >*Direct Debit Disputes: The Direct Debit Terms and Conditions set out the responsibilities of each party and explain the process for any disputed transactions. If you have any questions about your payments, or wish to change or cancel these direct debit instructions, please contact us on 0508 738 765
                    </div>  
                        </fieldset>
                    </form>
                </div>
            </div> 
</body>

</html>
