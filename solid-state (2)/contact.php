<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Naitsabes - Contact Form Results</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<?php require 'header.php'; ?>

				<!-- Menu -->
					<?php require 'nav.php'; ?>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>Contact</h2>
								<p>Scroll down to see results</p>
							</div>
						</header>

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">

									<!-- <h3 class="major">Lorem ipsum dolor</h3>
									<p>Morbi mattis mi consectetur tortor elementum, varius pellentesque velit convallis. Aenean tincidunt lectus auctor mauris maximus, ac scelerisque ipsum tempor. Duis vulputate ex et ex tincidunt, quis lacinia velit aliquet. Duis non efficitur nisi, id malesuada justo. Maecenas sagittis felis ac sagittis semper. Curabitur purus leo donec vel dolor at arcu tincidunt bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce ut aliquet justo. Donec id neque ipsum. Integer eget ultricies odio. Nam vel ex a orci fringilla tincidunt. Aliquam eleifend ligula non velit accumsan cursus. Etiam ut gravida sapien.</p>

									<p>Vestibulum ultrices risus velit, sit amet blandit massa auctor sit amet. Sed eu lectus sem. Phasellus in odio at ipsum porttitor mollis id vel diam. Praesent sit amet posuere risus, eu faucibus lectus. Vivamus ex ligula, tempus pulvinar ipsum in, auctor porta quam. Proin nec commodo, vel scelerisque nisi scelerisque. Suspendisse id quam vel tortor tincidunt suscipit. Nullam auctor orci eu dolor consectetur, interdum ullamcorper ante tincidunt. Mauris felis nec felis elementum varius.</p>

									<h3 class="major">Vitae phasellus</h3>
									<p>Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.</p>

									<section class="features">
										<article>
											<a href="#" class="image"><img src="images/pic04.jpg" alt="" /></a>
											<h3 class="major">Sed feugiat lorem</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic05.jpg" alt="" /></a>
											<h3 class="major">Nisl placerat</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
									</section> -->

									<?php
									if ($_SERVER['REQUEST_METHOD'] == 'POST') {
										if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) {
											echo '<h3 class="major">Required Fields Not Filled In</h3><p>Sorry, it seems that you have not filled in all the required fields of the contact form.  The "name", "email" and "message" fields are required.  Please <a href="http://naitsabes.com">fill them in</a> and try again.</p>';
										} else {
											$to = 'dleung@connect.kellettschool.com';
											$name = $email = $message = $subject = $final_message = '';
											function prevent_hack($data) {
												$data = trim($data);
												$data = stripslashes($data);
												$data = htmlspecialchars($data);
												return $data;
											}
											$name = $_POST['name'];
											$email = $_POST['email'];
											$message = $_POST['message'];
											$name = filter_var($name, FILTER_SANITIZE_STRING);
											$email = filter_var($email, FILTER_SANITIZE_EMAIL);
											$message = filter_var($message, FILTER_SANITIZE_STRING);
											$name = prevent_hack($name);
											$email = prevent_hack($email);
											$message = prevent_hack($message);
											if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
												$subject = 'Naitsabes - Message from ' . $email;
												$final_message = "IP Address of Sender: " . $_SERVER['REMOTE_ADDR'] . "\r\n\r\nSent From Email: " . $email . "\r\n\r\n" . $message;
												$final_message = wordwrap($final_message, 50, "\r\n");
												mail($to, $subject, $final_message);
												echo '<h3 class="major">Email Sent Successfully</h3><p>Thank you for your email.  Your email was sent successfully.  I will reply to you as soon as possible.</p><p><a href="http://naitsabes.com" class="button">Return to Homepage</a></p>';
											} else {
												echo '<h3 class="major">Invalid Email Address</h3><p>Sorry, the email address you entered is invalid.  Please make sure you have <a href="http://naitsabes.com">typed in your email address correctly</a> and try again.</p>';
											}
										}
									} else {
										echo '<h3 class="major">Invalid Request</h3><p>Sorry, this page was not accessed properly.  Please return to the <a href="http://naitsabes.com">homepage</a>, fill in the contact form in the footer, click "Send Message" and try again.</p>';
									}
									?>

								</div>
							</div>

					</section>

				<!-- Footer -->
					<?php require 'footer.php'; ?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
