<?php
require 'main_conn.php';
require 'dev_conn.php';
require 'log_ip.php';
require 'mail_defaults.php';
?>
<!DOCTYPE HTML>
<!--
  Landed by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Recommend "Naitsabes Developer" to a Friend - Naitsabes Developer</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
        <?php require 'header.php'; ?>

			<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
						<header class="major">
							<h2>Recommend "Naitsabes Developer" to a Friend</h2>
							<p>If you enjoyed our Web Development (i.e. website-making) services, don't forget to recommend our services to your family and friends.  Every little bit helps <span class="icon fa-smile-o"></span></p>
						</header>

						<section>
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
								<div class="row uniform">
									<div class="6u 12u$(medium)">
										<p>
											<input type="text" name="recommender_name" placeholder="Enter your full name here (Required)" />
										</p>
									</div>
									<div class="6u 12u$(medium)">
										<p>
											<input type="text" name="recommender_email" placeholder="Enter your email address (Required)" />
										</p>
									</div>
									<div class="12u$">
										<p>
											<input type="text" name="recommend_to" placeholder="Enter the email address of the person you want to receive this recommendation (Required)" />
										</p>
									</div>
									<div class="12u$">
										<p>
											<textarea placeholder="Enter a custom message ... (Optional)" name="custom_msg" style="resize:none;height:250px;"></textarea>
										</p>
									</div>
									<div class="12u$">
										<p>
											<input type="submit" class="special" value="Send Recommendation" /> <input type="reset" value="Reset Form">
										</p>
									</div>
								</div>
              </form>
							<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
								if (empty($_POST['recommender_name']) || empty($_POST['recommender_email']) || empty($_POST['recommend_to'])) { ?>
									<p style="color:red;">
										<span class="icon fa-exclamation-triangle"></span> You must fill in your name, email and the email of the recipient.  The custom message is entirely optional.
									</p>
								<?php } else {
									$recommender_name = htmlspecialchars(stripslashes(trim($_POST['recommender_name'])));
									$recommender_email = htmlspecialchars(stripslashes(trim($_POST['recommender_email'])));
									$recommend_to = htmlspecialchars(stripslashes(trim($_POST['recommend_to'])));
									$custom_msg = htmlspecialchars(stripslashes(trim($_POST['custom_msg'])));
									if (!filter_var($recommender_email, FILTER_VALIDATE_EMAIL) === false && !filter_var($recommend_to, FILTER_VALIDATE_EMAIL) === false) {
										// Set Headers (From and Reply-to)
										$mail->setFrom($recommender_email, $recommender_name);
										$mail->addReplyTo($recommender_email, $recommender_name);
										// Set $to, $subject and $message
										$mail->addAddress($recommend_to);
										$mail->Subject = "Website Recommendation From $recommender_name ($recommender_email)";
										if (empty($custom_msg)) {
											$custom_msg_html = "";
										} else {
											$custom_msg_html = "
											<h2>Custom Message</h2>
											<p>Regarding this recommendation, $recommender_name has also left you a private message.</p>
											<p><pre style='word-wrap:break-word;background: rgba(255, 255, 255, 0.075);border-radius: 4px;font-size: 0.9em;margin: 0 0.25em;display: block;line-height: 1.75em;padding: 1em 1.5em;overflow-x: auto;border: 0;font: inherit;vertical-align: baseline;white-space: pre;font-family:Roboto,Helvetica,sans-serif'>$custom_msg</pre></p>
											";
										}
										$mail->msgHTML("<html>
											<body>
												<div style='background-color:rgb(28,29,38);color:rgba(255,255,255,0.74902);font-family:Roboto,Helvetica,sans-serif;padding:10px;'>
													<h1>Naitsabes Developer</h1>
													<h2>Why did I receive this email?</h2>
													<p>Your friend/relative (or someone you know), $recommender_name (<a href='mailto:$recommender_email' style='border-bottom:dotted 1px;color:#e44c65;text-decoration:none;'>$recommender_email</a>), has recommended you to visit <a style='border-bottom:dotted 1px;color:#e44c65;text-decoration:none;' href='http://developer.naitsabes.com' target='_blank'>Naitsabes Developer</a> and consider using their Web Development services.</p>
													<h2>What is Naitsabes Developer?</h2>
													<p>Naitsabes Developer is an experienced Web Developer with extensive knowledge of <b>HTML, CSS, JS, PHP, SQL, AJAX</b> and a bit of Ruby and C.  He is currently offering to code your website for anything from HKD$200 per hour to HKD$600 per hour depending on the complexity of your website.</p>
													<h2>Are there any discounts available?</h2>
													<p>Although the official website does not mention anything about discounts, if the purpose and intent of your website is for a very good cause (e.g. purely educational), Naitsabes Developer <i>may</i> offer a discount of <b>up to 50% off</b> upon negotiation.</p>
													<h2>Hmmm ... I'm interested.  Where can I get more details about your Services and Pricing?</h2>
													<p>Don't worry - we've got you.  Just click on the button below to start learning more about our services.</p>
													<p>
														<a href='http://developer.naitsabes.com' style='background-color: #e44c65;box-shadow: none;color: #ffffff !important;border-radius: 4px;border: 0;cursor: pointer;display: inline-block;font-weight: 300;height: 3em;line-height: 3em;padding: 0 2.25em;text-align: center;text-decoration: none;white-space: nowrap;'>I'm ready - let's go</a>
													</p>
													$custom_msg_html
												</div>
											</body>
										</html>");
										if (!$mail->send()) { ?>
											<p style="color:red;">
												<span class="icon fa-times"></span> Sorry, a fatal error occurred and the recommendation email was not sent.  Error: <?php echo $mail->ErrorInfo; ?>
											</p>
										<?php } else { ?>
											<p style="color:green;">
												<span class="icon fa-check"></span> Thank you, the recommendation has been sent.  Every little bit helps <span class="icon fa-smiley-o"></span>
											</p>
										<?php }
									} else { ?>
										<p style="color:red;">
											<span class="icon fa-exclamation-triangle"></span> Please provide a valid email address.  Our system has detected that you have provided an invalid email address.
										</p>
									<?php }
								}
							} ?>
            </section>

					</div>
				</div>

			<!-- Footer -->
        <?php require 'footer.php'; ?>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
