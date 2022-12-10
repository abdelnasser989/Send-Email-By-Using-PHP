<?php


$name  = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

require '../vendor/autoload.php';

// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';
// require 'phpmailer/src/Exception.php';


use PHPMailer\PHPMailer\PHPMailer;

$mail = new PHPMailer(true);


$mail->isSMPT();

$mail->Host = "smtp.gmail.com";
$mail->SMPTSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->port = 587;


$mail->Username = "you@examole.com";
$mail->password = "password";


$mail->setFrom($email, $name);
$mail->addAddress("you@example.com", "your email name");

$mail->Subject = $subject;
$mail->body = $message;

$mail->send();

echo " email send";



?>