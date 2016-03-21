<?php
require_once 'park_migration.php';
$parksInfo = trim(file_get_contents('national_parks.csv'));
$parksInArray = explode("\n",$parksInfo);

$insertValues = '';
foreach ($parksInArray as $park) {
    $parkInfomation = explode(',',$park);

    $insertValues .= "('{$parkInfomation[0]}','{$parkInfomation[1]}','{$parkInfomation[2]}','{$parkInfomation[3]}','{$parkInfomation[4]}'),";
}

$insertValues = rtrim($insertValues,',');
$insert ="INSERT INTO national_parks(name,location,date_established,area_in_acres,park_img)
        VALUES $insertValues";


$dbc->exec($insert);







 ?>
