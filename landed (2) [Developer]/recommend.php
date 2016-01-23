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
										if (empty($custom_msg)) {
											$extra_html_snippet = "";
										} else {
											$extra_html_snippet = "<h3>Custom Message</h3>
<p>$recommender_name (<a href='mailto:$recommender_email'>$recommender_email</a>) also sent you a custom message:</p>
<pre>$custom_msg</pre>";
										}
										$to = $recommend_to;
										$subject = "Website Recommendation from $recommender_name ($recommender_email)";
										$message = '<!DOCTYPE HTML>
										<!--
										  Landed by HTML5 UP
										  html5up.net | @n33co
										  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
										-->
										<html>
										  <head>
										    <title>Recommendation - Naitsabes Developer</title>
										    <meta charset="utf-8" />
										    <meta name="viewport" content="width=device-width, initial-scale=1" />
										    <!--[if lte IE 8]><script src="http://developer.naitsabes.com/assets/js/ie/html5shiv.js"></script><![endif]-->
										    <link rel="stylesheet" href="http://developer.naitsabes.com/assets/css/main.css" />
										    <!--[if lte IE 9]><link rel="stylesheet" href="http://developer.naitsabes.com/assets/css/ie9.css" /><![endif]-->
										    <!--[if lte IE 8]><link rel="stylesheet" href="http://developer.naitsabes.com/assets/css/ie8.css" /><![endif]-->
										  </head>
										  <body>
										    <div id="page-wrapper">

										      <!-- Header -->
										      <header id="header">
										        <h1 id="logo"><a href="http://developer.naitsabes.com/" target="_blank">Naitsabes Developer</a></h1>
										        <nav id="nav">
										          <ul>
										            <li><a href="http://developer.naitsabes.com/" target="_blank">Go to Site</a></li>
										            <!-- <li>
										              <a href="#">Layouts</a>
										              <ul>
										                <li><a href="left-sidebar.html">Left Sidebar</a></li>
										                <li><a href="right-sidebar.html">Right Sidebar</a></li>
										                <li><a href="no-sidebar.html">No Sidebar</a></li>
										                <li>
										                  <a href="#">Submenu</a>
										                  <ul>
										                    <li><a href="#">Option 1</a></li>
										                    <li><a href="#">Option 2</a></li>
										                    <li><a href="#">Option 3</a></li>
										                    <li><a href="#">Option 4</a></li>
										                  </ul>
										                </li>
										              </ul>
										            </li> -->
										            <!-- <li><a href="#" class="button special">Sign Up</a></li> -->
										          </ul>
										        </nav>
										      </header>

										      <!-- Main -->
										        <div id="main" class="wrapper style1">
										          <div class="container">
										            <header class="major">
										              <h2>Naitsabes Developer</h2>
										              <p>The perfect place to get your website designed</p>
										            </header>

										            <section>
										              <h3>Why did I receive this email?</h3>
										              <p>
										                A friend/relative of yours (or someone you know), $recommender_name (<a href="mailto:$recommender_email">$recommender_email</a>), sent you this email to recommend you to use the Web Development services of <strong><a href="http://developer.naitsabes.com/" target="_blank">Naitsabes Developer</a></strong>.
										              </p>
										              <h3>What is Naitsabes Developer?</h3>
										              <p>
										                <strong>Naitsabes Developer</strong> is an experienced Web Developer with extensive knowledge in <strong>HTML, CSS, JS, PHP, SQL and AJAX</strong>.  He is currently offering to have your website designed for anything from HKD&#36;200 per hour to HKD&#36;600 per hour depending on the complexity of the website you request.
										              </p>
										              <h3>What services does Naitsabes Developer offer?</h3>
										              <p>
										                Below is a brief summary of the features (on your website) Naitsabes Developer is willing to offer and their respective prices.
										              </p>
										              <div class="table-wrapper">
										                <table class="alt">
										                  <thead>
										                    <tr>
										                      <th>
										                        Package Name
										                      </th>
										                      <th>
										                        Price (HKD/hour)
										                      </th>
										                    </tr>
										                  </thead>
										                  <tbody>
										                    <tr>
										                      <td>
										                        Static Content
										                      </td>
										                      <td>
										                        HKD&#36;200
										                      </td>
										                    </tr>
										                    <tr>
										                      <td>
										                        Interactive (Client-Side) Website
										                      </td>
										                      <td>
										                        HKD&#36;300
										                      </td>
										                    </tr>
										                    <tr>
										                      <td>
										                        Pure PHP
										                      </td>
										                      <td>
										                        HKD&#36;400
										                      </td>
										                    </tr>
										                    <tr>
										                      <td>
										                        Server-Side
										                      </td>
										                      <td>
										                        HKD&#36;500
										                      </td>
										                    </tr>
										                    <tr>
										                      <td>
										                        AJAX
										                      </td>
										                      <td>
										                        HKD&#36;600
										                      </td>
										                    </tr>
										                  </tbody>
										                </table>
										              </div>
										              <p>
										                Apart from the standard packages, Naitsabes Developer also offers a number of add-ons.
										              </p>
										              <h3>Hmmm ... I&#39;m not sure yet.  Where can I get more information?</h3>
										              <p>
										                Don&#39;t worry - just click on the button below to go to the official website!
										              </p>
										              <p>
										                <a href="http://developer.naitsabes.com/" class="button special" target="_blank">Learn More</a>
										              </p>
																	$extra_html_snippet
										            </section>

										          </div>
										        </div>

										      <!-- Footer -->
										      <footer id="footer">
										        <!-- <ul class="icons">
										          <li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
										          <li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
										          <li><a href="#" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
										          <li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
										          <li><a href="#" class="icon alt fa-github"><span class="label">GitHub</span></a></li>
										          <li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
										        </ul> -->
										        <ul class="copyright">
										          <li>&copy; 2016 Donald Leung. All rights reserved.</li><li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
										        </ul>
										      </footer>

										    </div>

										    <!-- Scripts -->
										      <script src="http://developer.naitsabes.com/assets/js/jquery.min.js"></script>
										      <script src="http://developer.naitsabes.com/assets/js/jquery.scrolly.min.js"></script>
										      <script src="http://developer.naitsabes.com/assets/js/jquery.dropotron.min.js"></script>
										      <script src="http://developer.naitsabes.com/assets/js/jquery.scrollex.min.js"></script>
										      <script src="http://developer.naitsabes.com/assets/js/skel.min.js"></script>
										      <script src="http://developer.naitsabes.com/assets/js/util.js"></script>
										      <!--[if lte IE 8]><script src="http://developer.naitsabes.com/assets/js/ie/respond.min.js"></script><![endif]-->
										      <script src="http://developer.naitsabes.com/assets/js/main.js"></script>

										  </body>
										</html>
';
										// Setting content type for HTML mail (Courtesy of http://www.w3schools.com/php/func_mail_mail.asp)
										$headers = "MIME-Version: 1.0" . "\r\n";
										$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
										// Send my very first HTML mail :D
										mail($to, $subject, $message, $headers);
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
