<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// Valid ID
if (empty($_POST["validid"])) { 
    $errorMSG .= "validid is required ";
} else {
    $validid = $_POST["validid"];
}



// Receiving Email
$EmailTo = " rexcalidaddesigns@gmail.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "location: ";
$Body .= $location;
$Body .= "\n";
$Body .= "citizenship: ";
$Body .= $citizenship;
$Body .= "\n";
$Body .= "validid: ";
$Body .= $validid;
$Body .= "\n";
$Body .= "income: ";
$Body .= $income;
$Body .= "\n";
$Body .= "expenditure: ";
$Body .= $expenditure;
$Body .= "\n";
$Body .= "netincome: ";
$Body .= $netincome;
$Body .= "\n";
$Body .= "age: ";
$Body .= $age;
$Body .= "\n";
$Body .= "loan: ";
$Body .= $loan;
$Body .= "\n";
$Body .= "loanduration: ";
$Body .= $loanduration;
$Body .= "\n";


// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>