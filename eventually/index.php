<!DOCTYPE HTML>
<!--
	Eventually by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Donald Leung - Redesign in Progress</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1>Donald Leung - Redesign in Progress</h1>
				<p>No, no, no ... you've misunderstood me.  Of course the <b>person</b> isn't being redesigned!  I mean the website!</p>
				<p>Don't forget to drop by every once in a while to check for progress!  Alternatively, feel free to fill in your email address and click &quot;Sign Up&quot; to get notified of any changes.</p>
			</header>

		<!-- Signup Form -->
			<!-- <form id="signup-form" method="post" action="#">
				<input type="email" name="email" id="email" placeholder="Email Address" />
				<input type="submit" value="Sign Up" />
			</form> -->

		<!-- My Form -->
			<form class="signup-form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
				<input type="email" name="email" placeholder="Email Address" />
				<input type="submit" value="Sign Up" />
			</form>

			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$email = $message = "";
				function prevent_hack($data) {
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}
				$email = prevent_hack($_POST["email"]);
				$email = filter_var($email, FILTER_SANITIZE_EMAIL);
				// echo $email;
				if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
					$message = "IP Address of Sender: " . $_SERVER["REMOTE_ADDR"] . "\r\nThe visitor with email address " . $email . " would like to receive notifications regarding the redesign of this website.  Remeber to send him or her an email!";
					$message = wordwrap($message, 50, "\r\n");
					mail("dleung@connect.kellettschool.com", "Naitsabes.com - Notification Request", $message);
					echo '<p><span style="color: green;">Thank you!  The owner of this website has been notified of your request.</span></p>';
				} else {
					echo '<p><span style="color: red;">Sorry, you either left the form blank or the email address is invalid.  Please enter a valid email address and try again.</span></p>';
				}
			}
			?>

		<!-- Footer -->
			<footer id="footer">
				<ul class="copyright">
					<li>&copy; <?php echo date("Y"); ?> Donald Leung.  All rights reserved.</li><li>Credits: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
