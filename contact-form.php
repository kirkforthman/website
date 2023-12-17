<?php

$name = $_POST["sender-name"];
$email = $_POST["sender-email"];
$message = $_POST["message"];

$from= $name." // ".$email;


try {
  mail("kirkforthman@gmail.com", "Message from Personal Site", $message, $from);
} catch(Exception $e){
  echo "Something Went Wrong";
}

echo "email sent";

?>
