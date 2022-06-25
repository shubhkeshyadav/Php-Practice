<?php
require_once 'vendor/autoload.php'; 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//require 'PHPMailer/src/Exception.php';
//require 'PHPMailer-master/src/PHPMailer.php';
//require 'PHPMailer-master/src/SMTP.php';
// $mail = new PHPMailer();

// $mail->IsSMTP();
// $mail->Mailer = "smtp";

// $mail->SMTPDebug  = 1;  
// $mail->SMTPAuth   = TRUE;
// $mail->SMTPSecure = "tls";
// $mail->Port       = 587;
// $mail->Host       = "smtp.gmail.com";
// $mail->Username   = "shubhkeshyadav222@gmail.com";
// $mail->Password   = "Sai@Nath#Php10";

// $mail->IsHTML(true);
// $mail->AddAddress("sheldon@yopmail.com", "recipient-name");
// $mail->SetFrom("shubhkeshyadav222@gmail.com", "from-name");
// //$mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
// //$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
// $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
// $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

// $mail->MsgHTML($content); 

// if(!$mail->Send())
// {
//   echo "Error while sending Email.";
//   echo '<pre>';
//   print_r($mail);
// }
// else
// {
//   echo "Email sent successfully";
// }

$mail = new PHPMailer;

$mail->SMTPDebug = 1;                   // Enable verbose debug output
$mail->isSMTP();                        // Set mailer to use SMTP
$mail->Host       = 'smtp.gmail.com';    // Specify main SMTP server
$mail->SMTPAuth   = true;               // Enable SMTP authentication
$mail->Username   = 'shubhkeshyadav222@gmail.com';     // SMTP username
$mail->Password   = 'Sai@Nath#Php10';         // SMTP password
$mail->SMTPSecure = 'tls';              // Enable TLS encryption, 'ssl' also accepted
$mail->Port       = 587;                // TCP port to connect to



$mail->setFrom('shubhkeshyadav222@gmail.com', 'Your Name');
$mail->addAddress('shubhkesh.yadav@outlook.com', 'My Friend');
$mail->Subject  = 'First PHPMailer Message';
$mail->Body     = 'Test';
if(!$mail->send()) {
  //echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent.';
}


?>