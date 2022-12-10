<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';


function sendemail_verify($full_name,$email,$verify_token)
{
    $mail = new PHPMailer(true);
    $mail->isSMTP();                                                        //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                                   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                               //Enable SMTP authentication
    $mail->Username   = 'bobomejl123@gmail.com';                            //SMTP username
    $mail->Password   = 'testsifrazamejl';   

?>