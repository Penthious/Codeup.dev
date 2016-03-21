<?php
require_once '../../configuration.php';
require_once '../../db_connect.php';
require_once '../../Input.php';

session_start();
$totalPages = $_SESSION['totalPages'];

if(Input::has('park_id')) {
    $id = Input::get('park_id');
    $stmt = $dbc->query("SELECT * FROM national_parks WHERE id = {$id}");
    $park = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/national_parks.css">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

            <h2>Name:</h2>
            <p><?=$park['name']?></P>

            <h2>location:</h2>
            <p><?=$park['location']?></p>

            <h2>Established on:</h2>
            <p><?=$park['date_established']?></p>

            <h2>Park size:</h2>
            <p><?=$park['area_in_acres']?></p>
            <p>
                <a href="national_parks.php">Home Page</a>
            </p>

            <img class="parkImg" src="<?= $park['park_img']?>"/>

            <?php for ($i=1; $i <= $totalPages + 1 ; $i++) { ?>
               <h3 class="goToPage"><a href="national_parks.php?page=<?=$i ?> "> <?= $i ?> </a></h3>
           <?php }?>



        <script src="/js/jquery-1.12.0.js"></script>
        <script src="/js/"></script>
    </body>
</html>
