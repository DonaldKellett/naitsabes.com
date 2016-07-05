<?php require 'connect.php'; require 'log_ip.php'; ?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Naitsabes - Donald Leung's Personal Website</title>
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

				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<div class="logo"><span class="icon fa-server"></span></div>
							<h2>Naitsabes</h2>
							<p>The online home of an enthusiastic <a href="http://developer.naitsabes.com" target="_blank">web developer</a></p>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- One -->
							<section id="one" class="wrapper spotlight style1">
								<div class="inner">
									<!-- <a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a> -->
									<div class="content">
										<!-- Temporary Business Promotion Message -->
										<div id="promo-msg">
											<div class="row">
												<div class="2u 12u(xsmall)" style="text-align:center;">
													<p>
														<span class="icon fa-info-circle fa-3x"></span>
													</p>
												</div>
												<div class="9u 12u(xsmall)" style="text-align:left;">
													<p style="font-size: 1.25em;">
														Hello there! <span class="icon fa-smile-o"></span> If you like what you're seeing here, don't forget to take a look at my <a href="http://developer.naitsabes.com/" target="_blank">Web Development</a> services.  Thank you very much.
													</p>
												</div>
												<div class="1u 12u(xsmall) important(xsmall)">
													<p>
														<a id="promo-msg-close" style="text-decoration:none;" href="#" onclick="event.preventDefault();document.getElementById('promo-msg').style.display='none'">
															<span class="icon fa-times" style="text-decoration:none !important;" title="Close"></span>
														</a>
													</p>
												</div>
											</div>
										</div>
										<!-- End of Temporary Business Promotion Message -->
										<h2 class="major">About Me</h2>
										<p>
											I am Donald Sebastian Leung, a Sixth Form student studying at Kellett School who excels at Pure Mathematics and has a deep passion and commitment to Web Development.  I plan to take either Computer Sciences or Pure Mathematics at university.
										</p>
										<!-- <a href="#" class="special">Learn more</a> -->
									</div>
								</div>
							</section>

						<!-- Two -->
							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<!-- <a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a> -->
									<div class="content">
										<h2 class="major">Recent Events</h2>
										<ul class="alt">
											<li>Inspired by the Test Driven Development used at <a href="http://www.codewars.com" target="_blank">Codewars</a> and <a href="http://qualified.strive.co" target="_blank">Strive Qualified</a>, I recently authored custom TDD frameworks in <a href="https://github.com/DonaldKellett/PHP_Test_Fixture" target="_blank">PHP</a>, <a href="https://github.com/DonaldKellett/JSTester" target="_blank">Javascript</a> and <a href="https://github.com/DonaldKellett/RubyTester" target="_blank">Ruby</a>.  If you happen to program in these languages then you can use the testing frameworks for each language to test your own code <span class="icon fa fa-smile-o"></span></li>
											<li>I recently completed the Sample Assessment in <a href="http://qualified.strive.co" target="_blank">Strive Qualified</a> in Javascript, Ruby and Coffeescript.  I then also unofficially completed the sample assessment in PHP (which is not supported by Strive Qualified yet) using my custom testing framework.  I have uploaded <a href="https://github.com/DonaldKellett/Strive-Qualified-Test-Run-Solutions" target="_blank">the solutions</a> should you want to compare your solutions with mine <span class="icon fa fa-smile-o"></span></li>
										</ul>
										<!-- <a href="#" class="special">Learn more</a> -->
									</div>
								</div>
							</section>

						<!-- Three -->
							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<!-- <a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a> -->
									<div class="content">
										<h2 class="major">Past Events</h2>
										<ul class="alt">
            					<li>I graduated from <a target="_blank" href="http://www.think.edu.hk/tisk/eng/tis/tis_index.php">Think International School</a> at around June 2011.</li>
              				<li>I studied in <a target="_blank" href="http://www.css.edu.hk">Creative Secondary School</a> from August 2011 to July 2013.</li>
              				<li>I have completed Kumon Maths (Core) in December 2012.</li>
              				<li>I have also completed Kumon Maths (Level X) at 12/07/14.</li>
              				<li>In Summer 2014, I completed an EPYMT course (TDG) with Credit/Distinction.</li>
              				<li>In April-June 2014, I learned how to code in an ECA in <a target="_blank" href="http://www.kellettschool.com">Kellett School</a> provided by <a target="_blank" href="http://bsdacademy.com">BSD Academy</a>.</li>
											<li>During Summer 2015, I went to an &quot;Internet Game Development for Beginners&quot; course in HKUST and got an A&plus; grade.</li>
											<li>I now program mainly in <strong>Javascript, PHP and Ruby</strong>.  I have also come across many other languages, such as <em>Clojure, Haskell, Java, C and C#</em> to name a few.  I also know how to use <b>HTML and CSS</b> to design websites from source.</li>
            				</ul>
										<!-- <a href="#" class="special">Learn more</a> -->
									</div>
								</div>
							</section>

						<!-- Four -->
							<!-- <section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major">Vitae phasellus</h2>
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
										<article>
											<a href="#" class="image"><img src="images/pic06.jpg" alt="" /></a>
											<h3 class="major">Ante fermentum</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<h3 class="major">Fusce consequat</h3>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing vehicula id nulla dignissim dapibus ultrices.</p>
											<a href="#" class="special">Learn more</a>
										</article>
									</section>
									<ul class="actions">
										<li><a href="#" class="button">Browse All</a></li>
									</ul>
								</div>
							</section> -->

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

		<!-- Temporary Business Promotion Message Stylesheet -->
			<link rel="stylesheet" href="promo-msg.css" />
		<!-- End of Temporary Business Promotion Message Stylesheet -->

	</body>
</html>
