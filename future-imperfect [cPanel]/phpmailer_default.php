<?php
require 'PHPMailer/PHPMailerAutoLoad.php';
$mail = new PHPMailer;
$mail->isSMTP();
# $mail->SMTPDebug = 2;
# $mail->Debugoutput = 'html';
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "someone@example.tld"; // Enter your Gmail address here to start using the script
$mail->Password = "password"; // Enter your Gmail password here to start using the script
?>
