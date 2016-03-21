<?php
require '../../configuration.php';
require_once '../../db_connect.php';
require_once '../../input.php';

$limit  = 4;
$offset = 0;
$page = 1;
if(Input::has('page')){
    $page = Input::get('page');
    $offset = $page * $limit - $limit;
}

$stmt   = $dbc->query("SELECT * FROM national_parks limit {$limit} offset {$offset}");
$parks  = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt   = $dbc->query("SELECT COUNT(*) FROM national_parks");
$parksFullDataBase  = $stmt->fetchColumn();

$totalPages = $parksFullDataBase / $limit;
session_start();
$_SESSION['totalPages'] = $totalPages;


?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/national_parks.css">
        <meta charset="utf-8">
        <title>Parks Index</title>
    </head>
    <body>
         <?php foreach ($parks as $park): ?>
            <h1> <a href="parks_show.php?park_id=<?=$park['id'] ?>"> <?= $park['name']?></a>
            </h1>
            <h3><?= $park['location']?></h3>
         <?php endforeach; ?>

         <div >
             <?php if ($page > 1) { ?>
                 <p class="goToNext_PreviousPage">
                     <a href="national_parks.php?page=<?=$page - 1 ?>">Previous</a>
                 </p>

            <?php } ?>
            <?php if ($page<= $totalPages) { ?>
                <p class="goToNext_PreviousPage">
                     <a href="national_parks.php?page=<?=$page + 1 ?>">Next</a>
                </p>
            <?php } ?>
         </div>

         <?php for ($i=1; $i <= ceil($totalPages)  ; $i++) { ?>
            <h3 class="goToPage"><a href="national_parks.php?page=<?=$i ?> "> <?= $i ?> </a></h3>
         <?php }?>



        <script src="/js/jquery-1.12.0.js"></script>
        <script src="/js/"></script>
    </body>
</html>
