<?php

$name = $_POST["sender-name"];
$email = $_POST["sender-email"];
$message = $_POST["message"];

$from= $name." // ".$email;

$to = "kirkforthman@gmail.com";
$subject = "New Message from Personal Site";
$body = "Name: ".$name."\r\nEmail: ".$email."\r\nMessage: ".$message;

mail($to, $subject, $body, $from);

header("Location:index.html");

?>
