<?php
$dbc = new PDO('mysql:host=' . DB_host . ';dbname=' . DB_name,
DB_user,DB_password);
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
