<?php
$dev = new mysqli("localhost", "root", "root", "developer");
if ($dev->connect_error) {
  echo "Connection Failed: " . $dev->connect_error;
}
?>
