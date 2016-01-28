<?php
require 'main_conn.php';
$id = htmlspecialchars(stripslashes(trim($_GET['id'])));
$main->query("DELETE FROM mail WHERE id = $id");
require 'inbox_init.php';
?>
