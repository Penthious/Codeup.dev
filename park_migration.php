<?php
require_once 'configuration.php';
require_once 'db_connect.php';

echo $dbc -> getAttribute(PDO::ATTR_CONNECTION_STATUS) . PHP_EOL;

$sqlDropTable = <<<QUERY
    DROP TABLE IF EXISTS national_parks;
QUERY;
$dbc -> exec($sqlDropTable);
$sqlCreateTable = <<<QUERY
    CREATE TABLE national_parks (
        id INT UNSIGNED NOT NULL AUTO_INCREMENT,
        name VARCHAR(50),
        location VARCHAR(100) NOT NULL,
        date_established DATE,
        area_in_acres DOUBLE,
        park_img VARCHAR(50),
        describtion VARCHAR(50),
        PRIMARY KEY (id)
    );
QUERY;
$dbc -> exec($sqlCreateTable);


?>
