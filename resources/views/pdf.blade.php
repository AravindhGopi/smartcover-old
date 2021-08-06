<!DOCTYPE html>
<html>
    <html lang="en">

        <head>
            <meta charset="utf-8" />
            <meta name="author" content="Spicy dezyn" />
            <title>SmartCover Loan Application</title>
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        </head>
<body style="@import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');font-family: 'Open Sans', sans-serif; font-size:12px;">

        <div style="float:left; width:100%;">
            <div style="float:left; width:70%;">
                <h2 style="font-size:18px; text-align:left;">Direct Debit Authority</h2>
            </div>
        
            <div style="float:right; width:30%; margin-right:10px;">
                <img src="https://www.smartcover.co.nz/wp-content/themes/Vetcare/images/logo.jpg" width="160px" alt="logo">
            </div>
        </div>

        <div style="clear:both; width:100%; margin-top:5px;">
        
            <div style="float:left; width:60%;">
                <div style="border:1px solid #aaaaaa; padding:5px; ">
                    <label style="width:100%; padding:2px;">My account to be debited (acceptor)</label>
                    <p style="width:100%; border:1px solid #aaaaaa; padding:2px; letter-spacing: 1px;">{{$ACName}} </p>
                    <label style="width:100%; padding:2px;">Name of my bank:</label>
                    <p style="width:100%; border:1px solid #aaaaaa; padding:2px; letter-spacing: 1px;">{{$bank_name}} </p>
                    
        
                    <label style="width:100%; padding:2px; display: block;">Bank Account</label>
                    <div>
                        <input type="text" style="width:30px; margin-left:2px; text-align: left; padding:4px; letter-spacing: 2px;" value="{{$AC1}}">
                        <input type="text" style="width:40px; margin-left:5px; text-align: left; padding:4px; letter-spacing: 2px;" value="{{$AC2}}">
                        <input type="text" style="width:65px; margin-left:5px; text-align: left; padding:4px; letter-spacing: 2px;" value="{{$AC3}}">
                        <input type="text" style="width:40px; margin-left:5px; text-align: left; padding:4px; letter-spacing: 2px;" value="{{$AC4}}">
                    </div>
                </div>
                
                
            </div>
            
            <div style="float:left; width:40%; padding-left:10px;">
                
                <div style="border:1px solid #aaaaaa; padding:5px;">
                    <div style="padding:6px;">
                        <label style="width:100%; padding-bottom:5px; display:block; text-align:center;">Initiator's authorisation code</label>
                        <input type="text" style="width:100%; box-sizing:border-box; height:15px; border:1px solid #000; display: block; padding:4px; letter-spacing:10px; text-align:center;" value="0226673">
                    </div>
                    <div style="border:1px solid #aaaaaa; padding:15px; margin-top:28px;">
                        <label style="width:100%; padding-bottom:5px; display:block; text-align:center;">Approved</label>
                        <input type="text" style="width:35%; box-sizing:border-box; height:15px; display:inline-block; padding:5px; letter-spacing: 10px; text-align:center; border:0px; margin-right:25px;" value="2667">
                        <input type="text" style="width:45%; box-sizing:border-box; height:15px; display:inline-block; padding:5px; letter-spacing: 10px; text-align:center; border:0px; border-left:1px solid #000;" value="02/20">
                     </div>
                </div>
            
            </div>
        
        </div>   


        <div style="clear:both; width:100%;">

            <h4>From the acceptor to my bank:</h4>
            <p>I authorise you to debit my account with the amounts of direct debit instructions received from
            <strong> Smartcover Finance Limited</strong> (the 'Initiator') with the authorisation code specified on this authority and in accordance with this authority until further notice from me.</p>
            <p>I agree that this authority is subject to:</p>
            <ul>
                <li>my bank's terms and conditions that relate to my account, and</li>
                <li>the terms and conditions listed below.</li>
            </ul>

        </div>
        <div style="border:1px solid #aaaaaa; padding:2px;">
            <h4>Authorised signature/s:</h4>
            <p> 
                <input type="checkbox" checked style=margin-top:5px;>
                I <b>{{$AuthorizerName}}</b> authorized to operate this bank account independently and agree to the direct debit terms and conditions.
            </p>
           
            <p><strong>Client IP Address and Time Stamp:</strong>
                     @if (!empty($_SERVER['HTTP_CLIENT_IP']))
                        IP-{{$ip_address = $_SERVER['HTTP_CLIENT_IP']}}
                        @elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
                        IP-{{$_SERVER['HTTP_X_FORWARDED_FOR']}}
                        @else
                        IP-{{$_SERVER['REMOTE_ADDR']}}
                        @endif
                        <b>T-{{time()}}</b>
            
        </div>
        
        <div style="clear:both; width:100%;">
            
            <h4>Specific conditions relating to notices and disputes</h4>
            <ol>
                <li>I agree that the Initiator must give me at least 10 days prior notice of each direct debit, including the first direct debit in a series.</li>
                <li>Changes to the amounts or dates of a series of direct debits require 30 days prior notice to me.</li>
                <li>I can also agree with the Initiator to receive a same day notice for direct debits specifically requested by me.</li>
                <li>All notices must be in writing, but can be delivered electronically, if I have agreed that with the Initiator.</li>
                <li>I can also ask you to reverse a direct debit up to 120 days after the direct debit if:
                    <ul style="list-style: disc;">
                        <li>I didn't receive proper notice of the amount and date of the direct debit, or</li>
                        <li>I received notice but the amount or date of the direct debit is different from the amount or date on the notice.</li>
                    </ul>
                </li>
                <li>If you dishonour a direct debit but the Initiator retries it within 5 business days of the original direct debit, I understand that the Initiator doesn't need to notify me again about that direct debit.</li>
            </ol>
            
        </div>
        
        <div style="clear:both; width:100%;">
            
                <div style="float:left; width:60%; border:1px solid #aaaaaa; padding:5px;">
                    <h4>For Bank Use Only</h4>
                    <table style="border:1px solid #eee; padding:0; margin:0;">
                        <tr style="padding:0; margin:0;">
                            <td style="width:120px; border:1px solid #eee;">Date Received: </td>
                            <td style="width:120px; border:1px solid #eee;">Recorded by: </td>
                            <td style="width:120px; border:1px solid #eee;">Checked by: </td>
                        </tr>
                        <tr style="height:30px; padding:0; margin:0;">
                            <td style="width:120px; border:1px solid #eee;">&nbsp;</td>
                            <td style="width:120px; border:1px solid #eee;">&nbsp;</td>
                            <td style="width:120px; border:1px solid #eee;">&nbsp;</td>
                        </tr>
                    </table>
                    <p>Original – Retain at Branch | Copy – Forward to Initiator if requested</p>
                </div>
                <div style="float:left; width:40%; margin-left:15px; border:1px solid #aaaaaa; padding:2px;">
                    <p style="height:99px; border:1px solid #eee; padding:5px; text-align:center;">BANK STAMP</p>
                
                </div>
            
        </div>

    
</body>

</html>