<!DOCTYPE HTML>
<!-- skel-baseline v3.0.0 | (c) n33 | skel.io | MIT licensed -->
<html>
	<head>
		<title>Donald Leung - Contact</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">

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
				<h2>Contact Me</h2>
        <p>
          Feel free to fill out the form below to contact me!  I will reply you ASAP once I receive your email.
        </p>
        <form action="contact_results.php" method="post">
          <div class="row">
            <div class="6u 12u$(medium)">
              <p>
                <input type="email" name="email" placeholder="Your Email (Required)" />
              </p>
            </div>
            <div class="6u 12u$(medium)">
              <p>
                <input type="text" name="subject" placeholder="Subject of Email (Required)" />
              </p>
            </div>
            <div class="12u$">
              <p>
                <textarea name="body" placeholder="Message (Required)"></textarea>
              </p>
            </div>
            <div class="12u$">
              <p>
                <input type="submit" value="Send Email" />
              </p>
            </div>
          </div>
        </form>
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
