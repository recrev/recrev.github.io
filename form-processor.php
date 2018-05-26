<?php

$name = trim(stripslashes($_POST['Name']));
$email = trim(stripslashes($_POST['Email']));
$phone = trim(stripslashes($_POST['Phone']));
$address = trim(stripslashes($_POST['Address']));

$emailFrom = $_POST[$email];
$emailTo = $_POST['mike.henry047@gmail.com'];
$subject = $POST['Rec Rev Pickup'];

//TODO checkbox

$body .= "Name: ";
$body .= $body;
$body .= "\n";

$body .= "Phone Number: ";
$body .= $phone;
$body .= "\n";

$body .= "Pickup Address: ";
$body .= $address;
$body .= "\n";

mail($emailTo, $subject, $body, "From: <$emailFrom>");

header("Location: contact-thanks.html");
?>
