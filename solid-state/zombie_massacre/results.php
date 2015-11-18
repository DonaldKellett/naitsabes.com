<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Naitsabes - <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {echo 'Form Submission Results';} else {echo 'Page Not Accessed Properly';} ?></title>
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
					<header id="header">
						<h1><a href="http://naitsabes.com">Naitsabes</a></h1>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="http://naitsabes.com">Return to Homepage</a></li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>

				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>Zombie Massacre - <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {echo 'Form Submission Results';} else {echo 'Page Not Accessed Properly';} ?></h2>
								<p><?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {echo 'Scroll down to see your submission results';} else {echo 'This page was not accessed properly.  Please try again.';} ?></p>
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
                    $version = $_POST['version'];
                    $rate = $_POST['rate'];
                    $description = $_POST['description'];
                    $positive = $_POST['positive'];
                    $improvements = $_POST['improvements'];
                    $version = filter_var($version, FILTER_SANITIZE_STRING);
                    $rate = filter_var($rate, FILTER_SANITIZE_STRING);
                    $description = filter_var($description, FILTER_SANITIZE_STRING);
                    $positive = filter_var($positive, FILTER_SANITIZE_STRING);
                    $improvements = filter_var($improvements, FILTER_SANITIZE_STRING);
                    function prevent_hack($data) {
                      $data = trim($data);
                      $data = stripslashes($data);
                      $data = htmlspecialchars($data);
                      return $data;
                    }
                    $version = prevent_hack($version);
                    $rate = prevent_hack($rate);
                    $description = prevent_hack($description);
                    $positive = prevent_hack($positive);
                    $improvements = prevent_hack($improvements);
                    if (empty($version)) {
                      echo '<h3 class="major">Version Not Specified</h3><p>Sorry, you did not specify which version of the game you were providing feedback on.  Please try again.</p>';
                    } else {
                      if (empty($rate) || empty($description)) {
                        echo '<h3 class="major">Required Fields Not Filled In</h3><p>Oops, it seems that you have not filled in all of the required fields.  Please try again.</p>';
                      } else {
                        if (empty($positive)) {
                          $positive = "The user did not provide feedback on this section.";
                        }
                        if (empty($improvements)) {
                          $improvements = "The user did not provide feedback on this section.";
                        }
                        mail("dleung@connect.kellettschool.com", "Naitsabes - Zombie Massacre (" . $version . " Version) Feedback Form", "IP Address of Sender: " . $_SERVER["REMOTE_ADDR"] . "\r\n\r\nGame Rated: Zombie Massacre\r\n\r\nVersion Being Rated: " . $version . "\r\n\r\nRating Out of 10: " . $rate . "\r\n\r\nDescription: " . $description . "\r\n\r\nPositives about this game: " . $positive . "\r\n\r\nImprovements that could be made: " . $improvements);
                        echo '<h3 class="major">Response Successfully Submitted</h3><p>Thank you very much for your feedback on this version of the game.  Feedback from people like you are crucial in improving the services of this Website.</p><p><a href="http://naitsabes.com" class="button">Return to Homepage</a></p>';
                      }
                    }
                  } else {
                    echo '<h3 class="major">Page Not Accessed Properly</h3><p>This page was not accessed properly.  Please fill in the feedback form and try again.  Thank you.</p>';
                  }
                  ?>

								</div>
							</div>

					</section>

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<ul class="copyright">
								<li>&copy; <?php echo date("Y"); ?> Donald Leung. All rights reserved.</li><li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
							</ul>
						</div>
					</section>

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
