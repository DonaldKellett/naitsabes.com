<?php
require "vars.php";
$append = $_GET['append']; // Snippet file to append
$notify = $_GET['notify']; // Person to notify
?>
<!DOCTYPE HTML>
<!-- skel-baseline v3.0.0 | (c) n33 | skel.io | MIT licensed -->
<html>
	<head>
		<title>Feedback Corner - Comment on a Post</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header">
				<?php require 'header.php'; ?>
			</header>

		<!-- Main -->
			<div id="main" class="container">
				<div class="row">
					<div class="12u$">
            <h2>Feedback Corner - Comment on a Post</h2>
            <p>
              Feel free to fill in the form below to comment on the post you selected!  HTML tags are <strong>not</strong> supported in the commenting section.
            </p>
						<form action="comment_background.php?append=<?php echo htmlspecialchars($append); ?>&notify=<?php echo htmlspecialchars($notify); ?>" method="post">
							<div class="row">
								<div class="6u 12u$(medium)">
									<p>
										<input type="text" name="name" placeholder="Your Full Name (Required)" />
									</p>
								</div>
								<div class="6u 12u$(medium)">
									<p>
										<input type="email" name="email" placeholder="Your Email (Required)" />
									</p>
								</div>
								<div class="12u$">
									<p>
										<textarea name="comment" style="resize: none; height: 350px;" placeholder="Comment (Required)"></textarea>
									</p>
								</div>
								<div class="12u$">
									<p>
										<input type="submit" class="special" /> <input type="reset" value="Reset" />
									</p>
								</div>
							</div>
						</form>
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
