<?php
header("Content-Type: text/html; charset=utf-8");
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8";

$message = $_POST['user_message'];
$name = $_POST['user_name'];
$mail = $_POST['user_email'];

mail('kkonfedrat@gmail.com', 'Письмо от - '.$name." <".$mail.">", $message, $headers);

?>