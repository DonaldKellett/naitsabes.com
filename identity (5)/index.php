<?php
require 'PHPMailer-5.2.16/PHPMailerAutoload.php';
?>
<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Donald S. Leung - An Engineering Student at HKUST</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<section id="main">
						<header>
							<!-- <span class="avatar"><img src="images/avatar.jpg" alt="" /></span> -->
							<h1>Donald <span title="'S' for Sebastian">S.</span> Leung</h1>
							<p>An Engineering Student at <a href="http://www.ust.hk" target="_blank">HKUST</a></p>
							<p><a href="http://www.codewars.com/r/2QXbZQ" title="Join our vibrant developer community on Codewars!" target="_blank"><img src="https://www.codewars.com/users/donaldsebleung/badges/large" style="width: 300px" alt="donaldsebleung on Codewars" /></a></p>
						</header>

						<hr />
						<h2>Contact Me</h2>
						<form method="post" action="#">
							<div class="field">
								<input type="text" name="name" id="name" placeholder="Name" />
							</div>
							<div class="field">
								<input type="email" name="email" id="email" placeholder="Email" />
							</div>
							<div class="field">
								<div class="select-wrapper">
									<select name="category" id="category" style="text-transform:none">
										<option value="">- Select a Category -</option>
										<option value="Private Message">Private Message (PM)</option>
										<option value="Website Request">Website Request (i.e. you would like me to have your website designed) - Prices determined upon negotiation</option>
										<option value="Business Mail">Business-Related Mail (including but not limited to business deals, negotiations or mail directed to an organisation Donald S. Leung belongs to)</option>
									</select>
								</div>
							</div>
							<div class="field">
								<textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
							</div>
							<div class="field">
								<input type="submit" value="Send" />
								<input type="reset" value="Reset" />
							</div>
							<?php
							if ($_SERVER['REQUEST_METHOD'] === 'POST') {
								// Form Validation
								if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['category']) || empty($_POST['message'])) {
									echo "<p style='font-size:small;color:red'><span class='icon fa fa-exclamation-circle'></span> All fields are required</p>";
								} else {
									if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
										$mail = new PHPMailer;
										$mail->setFrom($_POST['email']);
										$mail->addReplyTo($_POST['email']);
										$mail->addAddress('i.donaldl@me.com');
										$mail->addAddress('dleung@connect.kellettschool.com');
										$mail->Subject = "{$_POST['category']} from Naitsabes.com";
										$mail->Body = $_POST['message'];
										if ($mail->send()) {
											echo "<p style='font-size:small;color:green'><span class='icon fa fa-check'></span> Message Sent</p>";
										} else {
											echo "<p style='font-size:small;color:red'><span class='icon fa fa-exclamation-circle'></span> An unknown error occurred and the message was not sent, please try again later</p>";
										}
									} else {
										echo "<p style='font-size:small;color:red'><span class='icon fa fa-exclamation-circle'></span> Invalid Email Address</p>";
									}
								}
							}
							?>
						</form>
						<hr />

						<footer>
							<ul class="icons">
								<li><a title="Contact Me on Facebook" href="https://www.facebook.com/i.donaldl" target="_blank" class="fa-facebook">Facebook</a></li>
								<li><a href="https://www.facebook.com/manbehindthescreen01" title="Keep up with my software (and other tech-related) updates by following my Facebook page" target="_blank" class="fa-facebook-official">Facebook Page</a></li>
								<li><a href="https://github.com/DonaldKellett" title="Feel free to visit my GitHub Page and view, download, fork and/or contribute to any of my 100+ repos" target="_blank" class="fa-github">GitHub</a></li>
								<li><a href="https://regexcrossword.com/profile/35957" title="Solve some unique, out-of-the-world crosswords on regexcrossword.com" target="_blank" class="fa-code">"Regex Crossword" GitHub Profile</a></li>
							</ul>
						</footer>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<ul class="copyright">
							<li>&copy; <?php echo date("Y"); ?> Donald Sebastian Leung.  All rights reserved.</li><li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
			<script>
				if ('addEventListener' in window) {
					window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
					document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
				}
			</script>

	</body>
</html>
