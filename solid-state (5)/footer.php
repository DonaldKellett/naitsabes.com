<section id="footer">
  <div class="inner">
    <h2 class="major">Contact Me</h2>
    <p>Feel free to use the contact form below to send me an email.  HTML formatting is not supported.</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <div class="field">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" />
      </div>
      <div class="field">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" />
      </div>
      <div class="field">
        <label for="message">Message</label>
        <textarea name="message" id="message" rows="4"></textarea>
      </div>
      <ul class="actions">
        <li><input type="submit" value="Send Message" /></li>
      </ul>
      <?php if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message'])) { ?>
          <p style="color: red;">
            <span class="icon fa fa-exclamation-triangle"></span> Please fill in all fields of the contact form.
          </p>
        <?php } else {
          $name = htmlspecialchars(stripslashes(trim($_POST['name'])));
          $email = htmlspecialchars(stripslashes(trim($_POST['email'])));
          $message = htmlspecialchars(stripslashes(trim($_POST['message'])));
          if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            if ($main->query("INSERT INTO mail (name, email, message, ip, status) VALUES (" . htmlspecialchars_decode("&quot;") . $name . htmlspecialchars_decode("&quot;") . "," . htmlspecialchars_decode("&quot;") . $email . htmlspecialchars_decode("&quot;") . "," . htmlspecialchars_decode("&quot;") . $message . htmlspecialchars_decode("&quot;") . "," . htmlspecialchars_decode("&quot;") . $_SERVER['REMOTE_ADDR'] . htmlspecialchars_decode("&quot;") . ", 'unread')") == true) {
              ?>
              <p style="color:green;">
                <span class="icon fa fa-check"></span> Thank you.  The message has been sent.
              </p>
              <?php
            } else { ?>
              <p style="color:red;">
                <span class="icon fa fa-times"></span> An error occurred and the message was not sent.  Sorry for the inconvenience caused.
              </p>
            <?php }
          } else { ?>
            <p style="color:red;">
              <span class="icon fa fa-exclamation-triangle"></span> Invalid email address.  Please provide a valid email address.
            </p>
          <?php }
        }
      } ?>
    </form>
    <ul class="contact">
      <li class="fa-code"><a href="http://donaldkellett.github.io" target="_blank">http://donaldkellett.github.io</a></li>
      <li class="fa-github"><a href="https://github.com/DonaldKellett" target="_blank">https://github.com/DonaldKellett</a></li>
      <li class="fa-envelope"><a href="mailto:dleung@connect.kellettschool.com">dleung@connect.kellettschool.com</a></li>
      <li class="fa-facebook"><a href="https://www.facebook.com/i.donaldl" target="_blank">https://www.facebook.com/i.donaldl</a></li>
      <li class="fa-facebook"><a href="https://www.facebook.com/donald.seb" target="_blank">https://www.facebook.com/donald.seb</a></li>
      <li class="fa-comment"><a href="https://tawk.to/donaldsebleung" target="_blank">https://tawk.to/donaldsebleung</a></li>
    </ul>
    <ul class="copyright">
      <li>&copy; <?php echo date("Y"); ?> Donald Leung. All rights reserved.</li><li>Design: <a href="http://html5up.net" target="_blank">HTML5 UP</a></li>
    </ul>
  </div>
</section>
