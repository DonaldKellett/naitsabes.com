<?php require "vars.php"; ?>
<!DOCTYPE HTML>
<!-- skel-baseline v3.0.0 | (c) n33 | skel.io | MIT licensed -->
<html>
	<head>
		<title>Welcome to the Feedback Corner!</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<?php require 'header.php'; ?>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h2>Donald Leung - Feedback Corner</h2>
				<p>The perfect place to discuss anything and provide feedback regarding Donald's website</p>
				<ul class="actions">
					<li><a href="create.php" class="button special">Create New Post</a></li>
				</ul>
			</section>

		<!-- Main -->
			<div id="main" class="container">
				<div class="row">
					<div class="12u$">
						<h3>Welcome to the Feedback Corner!</h3>
						<p>
							Feel free to discuss topics of any (appropriate) nature here!  You can also provide feedback regarding this website which I am more than happy to hear.
						</p>
						<p>
							This is basically like a temporary alternative to Forums.  Once I manage to code my own Forums, this page will be made redundant and hopefully all or most of the content in this section will be moved to Forums in some way.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="12u$">
						<h3>Posts</h3>
						<p>
							Below are the posts created by different people.  Scroll down to explore!  To comment on a post, simply click on the post you want to comment on, then click on the &quot;Comment&quot; button and fill in the form.
						</p>
						<ul class="alt">
							<?php
							$topic_list_read = fopen("topic_list.snippet.html","r") or die("Unable to open file!");
							echo fread($topic_list_read,filesize("topic_list.snippet.html"));
							fclose($topic_list_read);
							?>
						</ul>
					</div>
				</div>
			</div>

		<!-- Footer -->
			<footer id="footer">
				<?php require "footer.php"; ?>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
