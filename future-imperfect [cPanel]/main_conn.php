<?php
$main = new mysqli("localhost", "root", "root", "main");
if ($main->connect_error) {
  echo "Connection Failed: " . $main->connect_error;
}
?>
