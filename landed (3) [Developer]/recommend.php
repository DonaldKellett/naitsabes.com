<?php
require 'main_conn.php';
require 'dev_conn.php';
require 'log_ip.php';
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
										$to = $recommend_to;
										$subject = "Website Recommendation from " . $recommender_name . " (" . $recommender_email . ")";
										if (empty($custom_msg)) {
											$message = "Your friend/relative (or someone you know), " . $recommender_name . " (" . $recommender_email . "), has recommended you to visit the following website: http://developer.naitsabes.com

Naitsabes Developer is an experienced Web Developer with extensive knowledge of HTML, CSS, JS, PHP, SQL and AJAX.  He is currently offering to code your website for anything from HKD$200 per hour to HKD$600 per hour.  If you are in search of a web developer to code you a website or help you with your website, search no more - Naitsabes Developer is your perfect candidate.";
										} else {
											$message = "Your friend/relative (or someone you know), " . $recommender_name . " (" . $recommender_email . "), has recommended you to visit the following website: http://developer.naitsabes.com  He/She has also left you a personal message:

----------------------------------------------------------------------------------------------------

" . $custom_msg . "

----------------------------------------------------------------------------------------------------

Naitsabes Developer is an experienced Web Developer with extensive knowledge of HTML, CSS, JS, PHP, SQL and AJAX.  He is currently offering to code your website for anything from HKD$200 per hour to HKD$600 per hour.  If you are in search of a web developer to code you a website or help you with your website, search no more - Naitsabes Developer is your perfect candidate.";
										}
										mail($to, $subject, $message);
										?>
										<p style="color:green;">
											<span class="icon fa-check"></span> Thank you very much.  The recommendation email has been sent.  Every little bit helps <span class="icon fa-smile-o"></span>
										</p>
										<?php
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
