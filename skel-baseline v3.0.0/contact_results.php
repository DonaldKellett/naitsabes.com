<!DOCTYPE HTML>
<!-- skel-baseline v3.0.0 | (c) n33 | skel.io | MIT licensed -->
<html>
	<head>
		<title>Donald Leung - Contact: Results</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">
    <?php
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $subject = $body = "";
        $error_message = "";
        if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['body'])) {
          $error_message = "<h2>Required Fields Missing</h2>" . "<p>Sorry, it appears that you have not filled in the contact form properly.  Please <a href='contact.php'>return to the contact form</a> and try again.</p>";
        } else {
          function prevent_hack($data) {
            // Preventing XSS Exploits
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
          $email = prevent_hack($_POST['email']);
          $subject = prevent_hack($_POST['subject']);
          $body = prevent_hack($_POST['body']);
        }
      } else {
        $error_message = "<h2>Invalid Request</h2><p>Oops, it seems that you have attempted to access this page without submitting the contact form beforehand.  Please <a href='contact.php'>return to the contact form</a> and try again.</p>";
      }
    ?>

		<!-- Header -->
			<header id="header">
				<?php require 'header.php'; ?>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<?php require 'nav.php'; ?>
			</nav>

		<!-- Main -->
			<div id="main" class="container">
				<div class="row">
				  <div class="12u$">
				    <?php
            if ($_SERVER['REQUEST_METHOD'] != 'POST' || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['body'])) {
              echo $error_message;
            } else {
              echo "<h3>Email Sent</h3>";
              echo "<p>Thank you.  The email was successfully sent.  I will reply you as soon as possible.</p>";
              $site_owner_email = "dleung@connect.kellettschool.com";

              // Word Wrap $body so each line is below 70 characters

              $body = wordwrap($body, 70, "\r\n");

              $full_message = "Email of Sender: " . $email . "\r\n\r\n" . $body;

              // Send
              mail($site_owner_email, $subject, $full_message);

              // Create Document
              /* NOTICE: THIS FEATURE HAS BEEN DELETED AS OF 21/10/2015 SINCE THE SITE OWNER REALISED THAT IT MAY COMPROMISE PRIVACY */
              # $email_copy = fopen("email_copy.txt", "w+");
              # fwrite($email_copy, "(Email Sent To Address: " . $site_owner_email . ")" . "\n");
              # fwrite($email_copy, "Subject: " . $subject . "\n");
              # fwrite($email_copy, "Message: " . $body);
              # fclose($email_copy);

              # echo "<p>For your own reference, a <a href='email_copy.txt' download>copy of the email you have just sent</a> has been created.  Click on the link to view/download your copy!</p>";
              echo "<p><a class='button special' href='index.php'>Return to the Homepage</a></p>";
            }
            ?>
				  </div>
				</div>
			</div>

		<!-- Footer -->
			<footer id="footer">
				<?php require 'footer.php'; ?>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

		<!-- My Stylesheets -->
			<link rel="stylesheet" href="donald/assets/css/style.css" />

	</body>
</html>
