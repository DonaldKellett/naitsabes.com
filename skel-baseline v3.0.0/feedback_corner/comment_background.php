<?php
require 'vars.php';
$append = $_GET['append'];
$notify = $_GET['notify'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comment'])) {
    echo "Fatal error: Required fields missing.  Name, Email and Comment fields are required.  Please <a href='comment.php?append=" . $append . "'>return</a> and try again.";
  } else {
    function prevent_hack($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    $name = prevent_hack($_POST['name']);
    $email = prevent_hack($_POST['email']);
    $comment = prevent_hack($_POST['comment']);

    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $comment = filter_var($comment, FILTER_SANITIZE_STRING);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      // Valid email address
      $append_snippet_file = fopen($append, "a"); // Open snippet file for APPENDING
      fwrite($append_snippet_file, "<li><blockquote><p>" . $comment . "</p><p style='font-size: smaller; font-style: italic;'> - <a href='mailto:" . $email . "'>" . $name . "</a>, " . date("d-m-Y h:i a") . "</p></blockquote></li>");
      fclose($append_snippet_file);
      // Notify person who posted this article that someone commented on their post
      mail($notify, "Naitsabes.com - " . $name . " commented on your post", "You have received this email because " . $name . " commented on a post you have created.  Remember to check your post for comments and have a nice day!\r\n\r\n - Donald, owner of Naitsabes.com");
      echo "Success!  Your comment has been added.  <a href='index.php'>Return to Homepage</a>";
      header("Location: index.php");
      die();
    } else {
      echo "Fatal error: Email address is not valid.  Please <a href='comment.php?append=" . $append . "'>return</a> and try again.";
    }
  }
} else {
  header("Location: index.php");
  die();
}
?>
