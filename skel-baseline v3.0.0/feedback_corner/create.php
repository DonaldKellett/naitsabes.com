<?php require "vars.php"; ?>
<!DOCTYPE HTML>
<!-- skel-baseline v3.0.0 | (c) n33 | skel.io | MIT licensed -->
<html>
	<head>
		<title>Feedback Corner - Create a Post</title>
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
            <h2>Feedback Corner - Create a Post</h2>
            <p>
              Feel free to fill in the form below to create a post in this Feedback Corner!  HTML tags are supported.
            </p>
            <p>
              <span style="font-size: smaller; font-style: italic;">Note: HTML tag support means that the form is not hack-proof.  Please be considerate and do not attempt to hack this form.</span>
            </p>
            <form action="background.php" method="post">
              <div class="row">
                <div class="4u 6u(medium) 12u$(small)">
                  <p>
                    <input type="text" name="name" placeholder="Your Full Name (Required)" />
                  </p>
                </div>
                <div class="4u 6u(medium) 12u$(small)">
                  <p>
                    <input type="email" name="email" placeholder="Your Email (Required)" />
                  </p>
                </div>
                <div class="4u 12u$(medium)">
                  <p>
                    <input type="text" name="website" placeholder="Your Personal Website (Optional)" />
                  </p>
                </div>
                <div class="12u$">
                  <p>
                    <input type="text" name="title" placeholder="Heading of Your Post (Required)" />
                  </p>
                </div>
                <div class="12u$">
                  <p>
                    <textarea name="content" placeholder="Enter the content of your post here.  This field is required.  HTML tags are supported." style="resize: none; height: 350px;"></textarea>
                  </p>
                </div>
                <div class="12u$">
                  <p>
                    <input type="submit" class="special" /> <input type="reset" value="Reset">
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
