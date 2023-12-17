<?php

$name = $_POST["sender-name"];
$email = $_POST["sender-email"];
$message = $_POST["message"];

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMPT;

$mail = new PHPMailer(true);

$mail->isSMPTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.example.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "kirkforthman@gmail.com";
$mail->Password = "NewDl1ne!";

$mail->setFrom($email, $name);
$mail->addAddress("kirkforthman@gmail.com");

$mail->Subject = "Email From Personal Site";
$mail->Body = $message;

try {
  $mail->send();
} catch(Exception $e){
  echo "Something Went Wrong";
}

echo "email sent";

?>