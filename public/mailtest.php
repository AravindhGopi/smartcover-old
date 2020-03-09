<?php 
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "emailtest@YOURDOMAIN";
    $browser = $_SERVER['SERVER_NAME'];
    $to = "multilogsinfo@gmail.com";
    $subject = "PHP Mail Test script $browser";
    $message = "This is a test to check the $browser's PHP Mail functionality ";
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Test email sent";
?>