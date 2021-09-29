<?php
    // echo "<pre>";

    //     print_r($_POST);
    // echo '</pre>';

    $message_sent = false;
    if(isset($_POST['name']) && $_POST['name'] != '' ){

        if( filter_var($POST['email'], FILTER_VALIDATE_EMAIL) ){

            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];
        
            
            $to =  "nkrex24@gmail.com";
            $body = "";
        
        
            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "From: ".$message. "\r\n";
        
            // mail($to,$messageSubject,$body);

            $message_sent = true;

        }
    } 







    // $userName = $_POST['name'];
    // $userEmail = $_POST['email'];
    // $messageSubject = $_POST['subject'];
    // $message = $_POST['message'];

    
    // $to =  "nkrex24@gmail.com";
    // $body = "";


    // $body .= "From: ".$userName. "\r\n";
    // $body .= "Email: ".$userEmail. "\r\n";
    // $body .= "From: ".$message. "\r\n";

    // mail($to,$messageSubject,$body);



















?>