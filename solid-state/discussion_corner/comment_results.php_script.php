<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($file)) {
    echo '<h2>Discussion Not Specified</h2><p>Sorry, it seems that you have not chosen the discussion to comment on before you started filling in the commenting form.  Please do it properly and try again.</p>';
  } else {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comment'])) {
      echo '<h2>Required Fields Not Filled In</h2><p>Sorry, it seems that you have left some parts of the form blank.  Please <a href="comment.php?file=' . $file . '">fill it in properly</a> and try again.</p>';
    } else {
      $name = $_POST['name'];
      $email = $_POST['email'];
      $comment = $_POST['comment'];
      $name = filter_var($name, FILTER_SANITIZE_STRING);
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      $comment = filter_var($comment, FILTER_SANITIZE_STRING);
      function prevent_hack($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      $name = prevent_hack($name);
      $email = prevent_hack($email);
      $comment = prevent_hack($comment);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $edit_comment_file = fopen($file, "a");
        fwrite($edit_comment_file, '<li><div class="row"><div class="4u 12u$(small)"><h3><a href="mailto:' . $email . '">' . $name . '</a></h3><time class="published">' . date('d/m/Y h:i a') . '</time></div><div class="8u 12u$(small)"><p>' . $comment . '</p></div></div></li>');
        fclose($edit_comment_file);
        echo '<h2>Commenting Successful</h2><p>Your commenting request was successful and your comment has been added to the discussion.</p><p><a href="index.php" class="button">Return to Homepage</a></p>';
      } else {
        echo '<h2>Invalid Email Address</h2><p>Sorry, it seems that you have provided an invalid email address.  Please <a href="comment.php?file=' . $file . '">provide a valid email address</a> and try again.</p>';
      }
    }
  }
} else {
  echo '<h2>Invalid Request</h2><p>Sorry, it seems that you have not accessed this page properly.  Please fill in the commenting form properly and try again.</p>';
}
?>
