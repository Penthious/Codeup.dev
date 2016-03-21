<?php
define('DB_host', '127.0.0.1');
define('DB_name', 'employees');
define('DB_user', 'vagrant');
define('DB_password', 'vagrant');
require_once 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . PHP_EOL;

 ?>
