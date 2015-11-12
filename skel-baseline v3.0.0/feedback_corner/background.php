<?php
# Variables may come in handy
require 'vars.php';

// $request_success is set to bool(true) by default.  It may be set to bool(false) under certain conditions, preventing the request from completing.
$request_success = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['title']) || empty($_POST['content'])) {
    echo "Oops, it seems that you have not filled in all required fields.  For this reason, your request was not successful and a post was not created.  The name, email, title and content fields are required.  Please <a href='create.php'>fill them in</a> and try again.";
  } else {
    function prevent_hack($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    // Safening name, email, website and title
    $name = prevent_hack($_POST['name']);
    $email = prevent_hack($_POST['email']);
    $website = prevent_hack($_POST['website']);
    $title = prevent_hack($_POST['title']);

    // Unfortunately we want HTML tag support so we cannot perform htmlspecialchars() on content
    $content = $_POST['content'];

    // Applying Built-in filters for extra safety
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $website = filter_var($website, FILTER_SANITIZE_URL);
    $title = filter_var($title, FILTER_SANITIZE_STRING);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
      // Valid email address.  Continue process.
      echo "Valid Email Address!<br />";
      if (empty($website)) {
        // Website section was left blank.  Skip URL validation.
        echo "Website Section was left blank.  No validation required.<br /><a href='index.php'>Return to Homepage</a><br />";
      } else {
        // Validate Website URL
        if (!filter_var($website, FILTER_VALIDATE_URL) === false) {
          echo "The URL you provided is valid.<br /><a href='index.php'>Return to Homepage</a><br />";
        } else {
          echo "Error Detected: The website URL you provided was not a valid URL.  For this reason, your request was unsuccessful and a post was not created.  Please <a href='create.php'>enter a valid website URL</a> and try again.<br />";
          $request_success = false; // Prevent crucial operations from running later on
        }
      }
      // echo "Name: $name<br />Email: $email<br />Website: $website<br />Content: $content<br />";

      // Random Value (for unique filename purposes)
      $random_value = round(2000000000 * lcg_value()); // Fix - no need to generate negative numbers LOL :p
      $random_string = number_format($random_value);
      // echo $random_string;

      $final_filename = $random_string . "_" . $title . ".php";
      $final_snippet_filename = $random_string . "_" . $title . ".snippet.html";
      // echo $final_filename;
      $post_file = fopen($final_filename, "w") or die("Unable to create file!"); // File Opened for writing
      $post_snippet = fopen($final_snippet_filename, "w") or die("Unable to create snippet!"); // Snippet created for appending later
      if ($request_success == true) {
        // All tests passed!  Start writing file
        if (empty($website)) {
          // Website input is empty!  Write file WITHOUT website URL.
          fwrite($post_file, '<!DOCTYPE HTML><!-- skel-baseline v3.0.0 | (c) n33 | skel.io | MIT licensed --><html><head><title>Feedback Corner - ' . $title . '</title><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" /><link rel="stylesheet" href="assets/css/main.css" /></head><body id="top"><!-- Header --><header id="header"><h1><a href="index.php">Donald Leung <span style="font-size: 0.6em;">Feedback Corner</span></a></h1></header><!-- Main --><div id="main" class="container"><div class="row"><div class="12u$"><h2>' . $title . '</h2><p style="font-size: smaller; font-style: italic;">Created by <a href="mailto:' . $email . '">' . $name . '</a> at ' . date("d-m-Y h:i a") . '</p><div style="display: block;">' . $content . '</div><p><a href="comment.php?append=' . $final_snippet_filename . '&notify=' . $email . '" class="button">Comment</a></p><h3>Comments</h3><p>Below are the comments left by various people.</p><ul class="alt">' . htmlspecialchars_decode('&lt;') .  '?php ' . '$' . 'my_snippet = fopen("' . $final_snippet_filename . '", "r") or die("Unable to open my snippet file!"); echo fread(' . '$' . 'my_snippet, filesize("' . $final_snippet_filename . '")); fclose(' . '$' . 'my_snippet); ?' . htmlspecialchars_decode('&gt;') . '</ul></div></div></div><!-- Footer --><footer id="footer"><div class="copyright">&copy; 2015 Donald Leung. All rights reserved.</div></footer><!-- Scripts --><script src="assets/js/skel.min.js"></script><script src="assets/js/main.js"></script></body></html>');
          fwrite($post_snippet, "<!-- Snippet of " . $final_filename . " successfully created -->");
        } else {
          // Include all details including website
          fwrite($post_file, '<!DOCTYPE HTML><!-- skel-baseline v3.0.0 | (c) n33 | skel.io | MIT licensed --><html><head><title>Feedback Corner - ' . $title . '</title><meta charset="utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1" /><link rel="stylesheet" href="assets/css/main.css" /></head><body id="top"><!-- Header --><header id="header"><h1><a href="index.php">Donald Leung <span style="font-size: 0.6em;">Feedback Corner</span></a></h1></header><!-- Main --><div id="main" class="container"><div class="row"><div class="12u$"><h2>' . $title . '</h2><p style="font-size: smaller; font-style: italic;">Created by <a href="mailto:' . $email . '">' . $name . '</a> at ' . date("d-m-Y h:i a") . ' | Website: <a href="' . $website . '">' . $website . '</a></p><div style="display: block;">' . $content . '</div><p><a href="comment.php?append=' . $final_snippet_filename . '&notify=' . $email . '" class="button">Comment</a></p><h3>Comments</h3><p>Below are the comments left by various people.</p><ul class="alt">' . htmlspecialchars_decode('&lt;') .  '?php ' . '$' . 'my_snippet = fopen("' . $final_snippet_filename . '", "r") or die("Unable to open my snippet file!"); echo fread(' . '$' . 'my_snippet, filesize("' . $final_snippet_filename . '")); fclose(' . '$' . 'my_snippet); ?' . htmlspecialchars_decode('&gt;') . '</ul></div></div></div><!-- Footer --><footer id="footer"><div class="copyright">&copy; 2015 Donald Leung. All rights reserved.</div></footer><!-- Scripts --><script src="assets/js/skel.min.js"></script><script src="assets/js/main.js"></script></body></html>');
          fwrite($post_snippet, "<!-- Snippet of " . $final_filename . " successfully created -->");
        }
        $topic_list = fopen("topic_list.snippet.html", "a"); // Open Snippet HTML file for appending
        if (empty($website)) {
          fwrite($topic_list, "<li><h4><a href='$final_filename'>$title</a></h4><p style='font-size: smaller; font-style: italic;'>Created by <a href='mailto:" . $email . "'>" . $name . "</a> at " . date("d-m-Y h:i a") . "</p></li>");
        } else {
          fwrite($topic_list, "<li><h4><a href='$final_filename'>$title</a></h4><p style='font-size: smaller; font-style: italic;'>Created by <a href='mailto:" . $email . "'>" . $name . "</a> at " . date("d-m-Y h:i a") . " | Website: <a href='" . $website . "'>" . $website . "</a></p></li>");
        }
        fclose($topic_list);
      } else {
        echo "Sorry, it seems that your input was not valid.  Please <a href='create.php'>return</a> and start over again.";
      }
      fclose($post_snippet); // Close snippet file
      fclose($post_file); // Close file
    } else {
      echo "Error Detected: The email you provided was not a valid email address.  For this reason, your request was unsuccessful and a post was not created.  Please <a href='create.php'>enter a valid email address</a> and try again.";
    }
  }
  header("Location: index.php");
  die();
} else {
  header("Location: index.php");
  die();
}
?>
