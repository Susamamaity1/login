<?php

$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.hostinger.com";///your smtp host 
$mail->Port =465; // or 587
$mail->IsHTML(true);
$mail->Username = "helpdesk@royalsec.in";////your username
$mail->Password = "#Royal12345";//your password
$mail->isHTML(true);
$mail->SetFrom("helpdesk@royalsec.in","Email Verification");

$mail->Body = $message;

?>
