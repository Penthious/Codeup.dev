<?php
require_once 'park_migration.php';
$parksInfo = trim(file_get_contents('national_parks.csv'));
$parksInArray = explode("\n",$parksInfo);

$insertValues = '';
$stmt = $dbc->prepare('INSERT INTO national_parks(name,location,date_established,area_in_acres,park_img,describtion)
VALUES (:name,:location,:date_established,:area_in_acres,:park_img,:describtion)');

foreach ($parksInArray as $park) {
    $parkInfomation = explode(',',$park);

    $stmt->bindValue(':name', $parkInfomation[0], PDO::PARAM_STR);
    $stmt->bindValue(':location', $parkInfomation[1], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $parkInfomation[2], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $parkInfomation[3], PDO::PARAM_INT);
    $stmt->bindValue(':park_img', $parkInfomation[4], PDO::PARAM_STR);
    $stmt->bindValue(':describtion', $parkInfomation[5], PDO::PARAM_STR);

    $stmt->execute();
}











 ?>
