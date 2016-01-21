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
		<title>Request a Website - Naitsabes Developer</title>
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
							<h2>Request a Website</h2>
							<p>If you are interested in our Services and would like us to code a website for you / your organisation, feel free to fill in the form below to submit a request.  <strong>No money should be sent to us at this stage of the request.</strong>  Payments will proceed once an official confirmation is made.</p>
						</header>

            <section>
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="row uniform">
                  <div class="6u 12u(medium)">
                    <p>
                      <input type="text" name="name" placeholder="Full Name (Required)" />
                    </p>
                  </div>
                  <div class="6u 12u(medium)">
                    <p>
                      <input type="email" name="email" placeholder="Email Address (Required)" />
                    </p>
                  </div>
                  <div class="6u 12u(medium)">
                    <p>
                      <input type="text" name="phone_number" placeholder="Phone Number (Optional)" />
                    </p>
                  </div>
                  <div class="6u 12u(medium)">
                    <p>
                      <input type="text" name="address" placeholder="Address (Optional)" />
                    </p>
                  </div>
                  <div class="12u$">
                    <p>
                      <select name="pkg_req">
                        <option value="">- Request an Initial Package (Required) -</option>
                        <option value="Static Content">Static Content (HKD$200/hr upon confirmation)</option>
                        <option value="Interactive (Client-Side) Website">Interactive (Client-Side) Website (HKD$300/hr upon confirmation)</option>
                        <option value="Pure PHP">Pure PHP (HKD$400/hr upon confirmation)</option>
                        <option value="Server Side">Server Side (HKD$500/hr upon confirmation)</option>
                        <option value="AJAX">AJAX (HKD$600/hr upon confirmation)</option>
                        <option value="unsure">Unsure - let's discuss and negotiate</option>
                      </select>
                    </p>
                  </div>
                  <div class="12u$">
                    <p>
                      <select name="addon_req">
                        <option value="">- Choose an add-on (Optional) -</option>
                        <option value="Apache">Apache .htaccess and .htpasswd (an additional HKD$100/hr upon confirmation)</option>
                      </select>
                    </p>
                  </div>
                  <div class="12u$">
                    <p>
                      <textarea name="message" style="resize:none;height:250px;" placeholder="Leave a Message - for example what do you want a website for, how it should look and feel, things to take note of when making this website etc. (Optional)"></textarea>
                    </p>
                  </div>
                  <div class="12u$">
                    <p>
                      <input type="submit" class="special" value="Submit Request" /> <input type="reset" value="Reset Form" />
                    </p>
                  </div>
                </div>
              </form>
							<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
								if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['pkg_req'])) { ?>
									<p style="color:red;">
										<span class="icon fa-exclamation-triangle"></span> Sorry, you did not fill in all required fields.  You must provide your full name, email address and make an initial request for which package you may want to use.  If you are unsure which package you want, simply choose "Unsure - let's discuss and negotiate".
									</p>
								<?php } else {
									$name = htmlspecialchars(stripslashes(trim($_POST['name'])));
									$email = htmlspecialchars(stripslashes(trim($_POST['email'])));
									$phone = htmlspecialchars(stripslashes(trim($_POST['phone_number'])));
									$address = htmlspecialchars(stripslashes(trim($_POST['address'])));
									$init_pkg = htmlspecialchars(stripslashes(trim($_POST['pkg_req'])));
									$addon = htmlspecialchars(stripslashes(trim($_POST['addon_req'])));
									$message = htmlspecialchars(stripslashes(trim($_POST['message'])));
									if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
										if ($dev->query("INSERT INTO website_requests (name, email, phone_number, address, init_pkg, addon, message) VALUES (" . htmlspecialchars_decode("&quot;") . $name . htmlspecialchars_decode("&quot;") . "," . htmlspecialchars_decode("&quot;") . $email . htmlspecialchars_decode("&quot;") . "," . htmlspecialchars_decode("&quot;") . $phone . htmlspecialchars_decode("&quot;") . "," . htmlspecialchars_decode("&quot;") . $address . htmlspecialchars_decode("&quot;") . "," . htmlspecialchars_decode("&quot;") . $init_pkg . htmlspecialchars_decode("&quot;") . "," . htmlspecialchars_decode("&quot;") . $addon . htmlspecialchars_decode("&quot;") . "," . htmlspecialchars_decode("&quot;") . $message . htmlspecialchars_decode("&quot;") . ")") == true) {
											?>
											<p style="color:green;">
												<span class="icon fa-check"></span> Thank you.  Your request has been sent.  We will reply to you as soon as possible.
											</p>
											<?php
										} else { ?>
											<p style="color:red;">
												<span class="icon fa-times"></span> Sorry, an error occurred and the message did not send.  We apologise for any inconvenience caused.
											</p>
										<?php }
									} else { ?>
										<p style="color:red;">
											<span class="icon fa-exclamation-triangle"></span> You did not provide a valid email address.  Please provide a valid email address; otherwise, we will not be able to contact you.
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
