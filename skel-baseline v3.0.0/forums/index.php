<?php
// PHP goes here
$logged_in = $_COOKIE['logged_in'];
?>
<!DOCTYPE HTML>
<!-- skel-baseline v3.0.0 | (c) n33 | skel.io | MIT licensed -->
<html>
	<head>
		<title>Donald Leung - Forums<?php if ($logged_in != "true") {echo ": Log In";} ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<?php require 'header.php'; ?>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<?php require 'nav.php'; ?>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<h2>Donald Leung - Forums</h2>
				<p>A simple but effective Forums</p>
				<?php
				if ($logged_in == "true") {
					echo '<ul class="actions"><li><a href="post.php" class="button special">Create a Post</a></li></ul>';
				}
				?>
			</section>

		<!-- Main -->
			<div id="main" class="container">
				<div class="row">
					<div class="12u$">
						<?php
						if ($logged_in == "true") {
							// User is logged in.  Display secure content.
							echo '<h3>Logged In</h3>';
							echo '<p>Congrats!  You are logged in.  You can now view the secure content.</p>';
						} else {
							// User is not logged in.  Display the login form.
							echo '<h3>Log In</h3>';
							echo '<form action="login.php" method="post"><div class="row"><div class="12u$"><p><input type="text" name="username" placeholder="Username" /></p></div><div class="12u$"><p><input type="password" name="password" placeholder="Password" /></p></div><div class="12u$"><p><input type="submit" value="Login" class="special" /></p></div></div></form>';
							echo '<h4>Register</h4><p>If you do not have an account already, you can <a href="register.php">register for an account</a> here.</p>';
						}
						?>
					</div>
				</div>
			</div>

		<!-- Footer -->
			<footer id="footer">
				<?php require 'footer.php'; ?>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
