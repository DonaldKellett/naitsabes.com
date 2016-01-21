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
		<title>Naitsabes Web Development Services</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="landing">
		<div id="page-wrapper">

			<!-- Header -->
				<?php require 'header.php'; ?>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Naitsabes Developer</h2>
							<p>The perfect place to get your website designed</p>
						</header>
						<span class="image"><img src="images/main_pic.jpeg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/pic02.jpg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="6u 12u(medium)">
									<h2>In search of a web developer?  Search No More</h2>
									<p>
										From simple but beautiful static websites (i.e. those containing readable content only) to dynamic, Javascript-powered interactive websites to PHP-powered websites with advanced server-side features, Naitsabes Developer will help you get it done in the shortest time possible with little to no third party apps/plugins involved.
									</p>
								</div>
								<div class="6u 12u(medium)">
									<h2>Static Websites / Page Content</h2>
									<p>
										Static websites are websites that only contain read-only content.  This type of website is best if all you want is a simple but beautiful personal website to describe yourself (for example).  Such websites are built from pure <strong>HTML5 &amp; CSS3</strong> but alternatively, you may choose <strong>SVG</strong> for a change if you want something other than a simple website for static content.
									</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/pic03.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Client-Side Scripting</h2>
							<p>
								Best for interactive websites
							</p>
						</header>
						<p>If a static webpage does not suit your purposes, <b>no problem</b>!  Naitsabes Developer can help you add just about as much interactivity as you want onto your website via client-side scripting languages such as <strong>Javascript</strong>.  For example, if you want a countdown timer in your website, Naitsabes Developer will have a timer built into the very wheelwork of your website in no time using Javascript.</p>
						<ul class="actions">
							<li><a href="#four" class="button scrolly">Learn More</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- Three -->
				<section id="three" class="spotlight style3 left">
					<span class="image fit main bottom"><img src="images/pic04.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Server-Side Scripting</h2>
							<p>Best for making lightweight private forums, data collection and analysis etc.</p>
						</header>
						<p>Sometimes, you can't get exactly what you want with client-side scripting such as Javascript because it is not designed to handle server-side events.  If you request a working contact form on the footer of your website, a private forums you and your family can access or a simple chat platform to chat with your friends, <strong>PHP</strong> is your best bet.  Combined with <strong>SQL</strong>, Naitsabes Developer can help you achieve almost everything including data collection, data analysis, login/logout systems, forums and even a chat platform!</p>
						<!-- <ul class="actions">
							<li><a href="#" class="button">Learn More</a></li>
						</ul> -->
					</div>
					<a href="#four" class="goto-next scrolly">Next</a>
				</section>

			<!-- Four -->
				<section id="four" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>Packages and Pricing</h2>
							<p>Scroll down to decide the package and pricing that suits you most</p>
						</header>
						<div class="box alt">
							<div class="row uniform">
								<section class="4u 12u(medium)">
									<span class="icon alt major fa-css3"></span>
									<h3>Static Content</h3>
									<div class="table-wrapper">
										<table class="alt">
											<tbody>
												<tr>
													<td>
														<strong>Basic</strong>
													</td>
													<td>
														HTML5 &amp; CSS3
													</td>
												</tr>
												<tr>
													<td>
														<strong>Extra</strong>
													</td>
													<td>
														SVG (also offered in this package if requested)
													</td>
												</tr>
												<tr>
													<td>
														<strong>From Source</strong>
													</td>
													<td>
														No.  A website template of your choice will be downloaded and then <em>edited from source</em>.
													</td>
												</tr>
												<tr>
													<td>
														<strong>Best For</strong>
													</td>
													<td>
														Informative/Educational Websites, Personal Profile, Lightweight Personal Website
													</td>
												</tr>
												<tr>
													<td>
														<strong>Price Per Hour</strong>
													</td>
													<td>
														HKD$200
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</section>
								<section class="4u 12u(medium)">
									<span class="icon alt major fa-code"></span>
									<h3>Interactive (Client-Side) Website</h3>
									<div class="table-wrapper">
										<table class="alt">
											<tbody>
												<tr>
													<td>
														<strong>Basic</strong>
													</td>
													<td>
														JS (i.e. Javascript) <em>plus everything offered in the "Static Content" package</em>
													</td>
												</tr>
												<tr>
													<td>
														<strong>Extra</strong>
													</td>
													<td>
														<em>All extra features offered by "Static Content" package if necessary</em>
													</td>
												</tr>
												<tr>
													<td>
														<strong>From Source</strong>
													</td>
													<td>
														Yes.  All JS used in your website (excluding those coming from HTML5 templates) will be developed from source.
													</td>
												</tr>
												<tr>
													<td>
														<strong>Best For</strong>
													</td>
													<td>
														Websites containing Games, Games, Timing Features, Interactive Page Content
													</td>
												</tr>
												<tr>
													<td>
														<strong>Price Per Hour</strong>
													</td>
													<td>
														HKD$300
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</section>
								<section class="4u 12u(medium)">
									<span class="icon alt major fa-envelope-o"></span>
									<h3>Pure PHP</h3>
									<div class="table-wrapper">
										<table class="alt">
											<tbody>
												<tr>
													<td>
														<strong>Basic</strong>
													</td>
													<td>
														PHP <em>(plus all features included in the "Interactive (Client-Side) Website" package)</em>
													</td>
												</tr>
												<tr>
													<td>
														<strong>Extra</strong>
													</td>
													<td>
														All extra features mentioned in "Static Content" package
													</td>
												</tr>
												<tr>
													<td>
														<strong>From Source</strong>
													</td>
													<td>
														Yes.  All PHP offered in this package is developed from source/scratch <em>unless</em> the template of your choice contains PHP code itself
													</td>
												</tr>
												<tr>
													<td>
														<strong>Best For</strong>
													</td>
													<td>
														Mailing Forms, Feedback Forms, Simple Discussion Platforms (<em title="If you need login functions, please refer to the 'Server-Side' section">no login</em>)
													</td>
												</tr>
												<tr>
													<td>
														<strong>Price Per Hour</strong>
													</td>
													<td>
														HKD$400
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</section>
								<section class="6u 12u(medium)">
									<span class="icon alt major fa-server"></span>
									<h3>Server-Side</h3>
									<div class="table-wrapper">
										<table class="alt">
											<tbody>
												<tr>
													<td>
														<strong>Basic</strong>
													</td>
													<td>
														PHP, SQL <em>and everything in "Interactive (Client-Side) Website"</em>
													</td>
												</tr>
												<tr>
													<td>
														<strong>Extra</strong>
													</td>
													<td>
														All extra features included in the "Static Content" package
													</td>
												</tr>
												<tr>
													<td>
														<strong>From Source</strong>
													</td>
													<td>
														Yes.  All PHP code and SQL databases will be developed and created, respectively, from source/scratch.  The only exception is if the website template you choose contains PHP code itself.
													</td>
												</tr>
												<tr>
													<td>
														<strong>Best For</strong>
													</td>
													<td>
														Mailing Forms (Pure PHP), Feedback Form (Pure PHP <em>or</em> PHP-SQL), Discussion Platforms, Lightweight (Private) Forums, Simple (Local) Search Engine
													</td>
												</tr>
												<tr>
													<td>
														<strong>Price Per Hour</strong>
													</td>
													<td>
														HKD$500
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</section>
								<section class="6u 12u(medium)">
									<span class="icon alt major fa-comment"></span>
									<h3>AJAX</h3>
									<div class="table-wrapper">
										<table class="alt">
											<tbody>
												<tr>
													<td>
														<strong>Basic</strong>
													</td>
													<td>
														AJAX (real-time PHP <em>via</em> JS methods), SQL <em>and everything offered in every other package above</em>
													</td>
												</tr>
												<tr>
													<td>
														<strong>Extra</strong>
													</td>
													<td>
														All extra features listed in every other package above (upon request)
													</td>
												</tr>
												<tr>
													<td>
														<strong>From Source</strong>
													</td>
													<td>
														Yes.  All AJAX-related code, as well as pure PHP code and SQL databases will be developed/created from scratch <em>except if the template of your choice comes with PHP code</em>
													</td>
												</tr>
												<tr>
													<td>
														<strong>Best For</strong>
													</td>
													<td>
														Real-time chat applications/platforms, real-time features on (private) Forums without having to reload the page every time, real-time mailing forms, etc, etc.
													</td>
												</tr>
												<tr>
													<td>
														<strong>Price Per Hour</strong>
													</td>
													<td>
														HKD$600
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</section>
								<section class="12u$">
									<h2>Add-ons</h2>
									<p>
										Need some extra features that are not mentioned above?  No problem!  Scroll down to decide which add-on you want if you ever need one.  <strong>Please note that add-ons <em>cannot</em> be stand-alone (i.e. you MUST pair it up with a package above)</strong>
									</p>
								</section>
								<section class="12u$">
									<span class="icon alt major fa-server"></span>
									<h3>Apache</h3>
									<div class="table-wrapper">
										<table class="alt">
											<tr>
												<td>
													<strong>Basic</strong>
												</td>
												<td>
													Apache (<code>.htaccess</code> files)
												</td>
											</tr>
											<tr>
												<td>
													<strong>Extra</strong>
												</td>
												<td>
													Apache (<code>.htpasswd</code> files for protected areas)
												</td>
											</tr>
											<tr>
												<td>
													<strong>From Source</strong>
												</td>
												<td>
													Yes.  All <code>.htaccess</code> and <code>.htpasswd</code> files are typed from source
												</td>
											</tr>
											<tr>
												<td>
													<strong>Best For</strong>
												</td>
												<td>
													Error Pages, Password-protected areas (for keeping a private forums secure, for example), Extra website settings
												</td>
											</tr>
											<tr>
												<td>
													<strong>Price Per Hour</strong>
												</td>
												<td>
													HKD$100
												</td>
											</tr>
										</table>
									</div>
								</section>
								<!-- <section class="4u 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-area-chart"></span>
									<h3>Ipsum sed commodo</h3>
									<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
								</section>
								<section class="4u 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-comment"></span>
									<h3>Eleifend lorem ornare</h3>
									<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
								</section>
								<section class="4u$ 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-flask"></span>
									<h3>Cubilia cep lobortis</h3>
									<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
								</section>
								<section class="4u 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-paper-plane"></span>
									<h3>Non semper interdum</h3>
									<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
								</section>
								<section class="4u 6u(medium) 12u$(xsmall)">
									<span class="icon alt major fa-file"></span>
									<h3>Odio laoreet accumsan</h3>
									<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
								</section>
								<section class="4u$ 6u$(medium) 12u$(xsmall)">
									<span class="icon alt major fa-lock"></span>
									<h3>Massa arcu accumsan</h3>
									<p>Feugiat accumsan lorem eu ac lorem amet accumsan donec. Blandit orci porttitor.</p>
								</section> -->
							</div>
						</div>
						<footer class="major">
							<ul class="actions">
								<li><a href="request.php" class="button special">I'm interested - submit a request</a></li>
							</ul>
						</footer>
					</div>
				</section>

			<!-- Five -->
				<!-- <section id="five" class="wrapper style2 special fade">
					<div class="container">
						<header>
							<h2>Magna faucibus lorem diam</h2>
							<p>Ante metus praesent faucibus ante integer id accumsan eleifend</p>
						</header>
						<form method="post" action="#" class="container 50%">
							<div class="row uniform 50%">
								<div class="8u 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Your Email Address" /></div>
								<div class="4u$ 12u$(xsmall)"><input type="submit" value="Get Started" class="fit special" /></div>
							</div>
						</form>
					</div>
				</section> -->

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
