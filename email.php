<?php

  //error_reporting(E_ALL); If you want to check for errors uncomment this.
  //ini_set('display_errors','1');

  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;
  $subject = $_REQUES['subject'] ;

  // here we use the php mail function
  // to send an email to:
  // you@yourdomain.com

require("PHPMailer/class.phpmailer.php");
require("PHPMailer/class.smtp.php");

$mail = new PHPMailer();

$mail->IsSMTP(); // set mailer to use SMTP
$mail->Host = "mail.potatocodes.com";  // specify main and backup server
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->Username = "info@potatocodes.com";  // SMTP username
$mail->Password = "Fly456Denithro"; // SMTP password

$mail->From = $email;

$mail->AddAddress("juan.miguel.g.alvarez@yahoo.com"); //place the email addresses to recieve the inquiry
/*$mail->AddAddress("samplemail@gmail.com");*/

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Message from your website ".$subject;
$mail->Body    = $message;
$mail->AltBody = $message;

if(!$mail->Send())
{
   echo "Message could not be sent. <p>";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>