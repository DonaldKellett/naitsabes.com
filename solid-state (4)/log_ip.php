<?php $main->query("INSERT INTO ip_log (visitor_ip, path) VALUES ('" . $_SERVER['REMOTE_ADDR'] . "', '" . $_SERVER['PHP_SELF'] . "')"); ?>
