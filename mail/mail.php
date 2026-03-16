<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';

if(isset($_POST['email'])){

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail = new PHPMailer(true);

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'mndmedicalcentre@gmail.com';
$mail->Password = 'pqgtyuiqawtrpqnz';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom($email, $name);
$mail->addAddress('mndmedicalcentre@gmail.com');

$mail->Subject = "New Message";
$mail->Body = "Name: $name\nEmail: $email\nPhone: $phone\nSubject: $subject\nMessage: $message";

$mail->send();

header("location: ../mail-success.html");

}

?>