<?php

/*
 * contact.php
 * A script powering the contact form located at /index.php
 * (c) Donald Sebastian Leung.  All rights reserved.
 */

use PHPMailer\PHPMailer\PHPMailer;

require "../libs/PHPMailer-6.0.5/src/PHPMailer.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST" || !isset($_POST["name"]) || !isset($_POST["email"]) || !isset($_POST["message"]))
  echo "<span style=\"color: red\"><span class=\"icon fa-exclamation-circle\"></span> The message was not sent since the form was not submitted properly or is missing required data fields.</span>";
elseif (empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["message"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
  echo "<span style=\"color: red\"><span class=\"icon fa-exclamation-circle\"></span> The message was not sent because:<br /><ul>";
  if (empty($_POST["name"]))
    echo "<li>The &quot;name&quot; field was empty</li>";
  if (empty($_POST["email"]))
    echo "<li>The &quot;email&quot; field was empty</li>";
  elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
    echo "<li>An invalid email address was provided</li>";
  if (empty($_POST["message"]))
    echo "<li>The &quot;message&quot; field was empty</li>";
  echo "</ul></span>";
} else {
  $mail = new PHPMailer;
  $mail->setFrom($_POST["email"], $_POST["name"]);
  $mail->addReplyTo($_POST["email"], $_POST["name"]);
  $mail->addAddress("donaldsebleung@gmail.com");
  $mail->Subject = "Private Message from {$_POST["name"]}";
  $mail->Body = "{$_POST["message"]}\n\n- Sent from http://naitsabes.com";
  echo $mail->send() ?
    "<span style=\"color: green\"><span class=\"icon fa-check-circle\"></span> The message was sent successfully.</span>" :
    "<span style=\"color: red\"><span class=\"icon fa-exclamation-circle\"></span> The message could not be sent due to an unknown error.  If this persists, please consider sending an email directly to <a href=\"mailto:donaldsebleung@gmail.com\">donaldsebleung@gmail.com</a>.  Don't forget to notify me of this error as well ;)</span>";
}

?>
