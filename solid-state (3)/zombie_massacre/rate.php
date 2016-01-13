<?php $version = $_GET['version']; ?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Naitsabes - Rate Zombie Massacre</title>
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
								<h2>Zombie Massacre - Feedback Form</h2>
								<p>Please fill in the form below to provide feedback regarding this game.  Thank you.  All fields are required unless specified.</p>
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

									<form action="results.php" method="post">
										<div class="row uniform">
											<input type="hidden" name="version" value="<?php echo $version; ?>">
											<h3>Rate Zombie Massacre (<?php echo $version; ?> Version) Out of 10</h3>
											<div class="12u$">
												<input type="radio" name="rate" id="rate-1" value="1" checked>
												<label for="rate-1">1</label>
											</div>
											<div class="12u$">
												<input type="radio" name="rate" id="rate-2" value="2">
												<label for="rate-2">2</label>
											</div>
											<div class="12u$">
												<input type="radio" name="rate" id="rate-3" value="3">
												<label for="rate-3">3</label>
											</div>
											<div class="12u$">
												<input type="radio" name="rate" id="rate-4" value="4">
												<label for="rate-4">4</label>
											</div>
											<div class="12u$">
												<input type="radio" name="rate" id="rate-5" value="5">
												<label for="rate-5">5</label>
											</div>
											<div class="12u$">
												<input type="radio" name="rate" id="rate-6" value="6">
												<label for="rate-6">6</label>
											</div>
											<div class="12u$">
												<input type="radio" name="rate" id="rate-7" value="7">
												<label for="rate-7">7</label>
											</div>
											<div class="12u$">
												<input type="radio" name="rate" id="rate-8" value="8">
												<label for="rate-8">8</label>
											</div>
											<div class="12u$">
												<input type="radio" name="rate" id="rate-9" value="9">
												<label for="rate-9">9</label>
											</div>
											<div class="12u$">
												<input type="radio" name="rate" id="rate-10" value="10">
												<label for="rate-10">10</label>
											</div>
											<div class="12u$">
												<label for="description">How would you describe Zombie Massacre (<?php echo $version; ?> Version)?</label>
												<input type="text" name="description" />
											</div>
											<div class="12u$">
												<label for="positive">What did you like about this game? (Optional)</label>
												<textarea name="positive" style="resize: none; height: 250px;"></textarea>
											</div>
											<div class="12u$">
												<label for="improvements">What could have been better? (Optional)</label>
												<textarea name="improvements" style="resize: none; height: 250px;"></textarea>
											</div>
											<div class="12u$">
												<input type="submit" class="special" value="Submit Response"> <input type="reset" value="Reset">
											</div>
										</div>
									</form>

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
