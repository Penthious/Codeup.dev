<?php
require '../../configuration.php';
require_once '../../db_connect.php';
require_once '../../Input.php';

$limit  = 4;
$offset = 0;
$page = 1;

if(Input::has('page')){
    $page = Input::get('page');
    $offset = $page * $limit - $limit;
}

$stmt = $dbc->prepare("SELECT * FROM national_parks limit :limit offset :offset");

$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();


$parks  = $stmt->fetchAll(PDO::FETCH_ASSOC);

$stmt   = $dbc->query("SELECT COUNT(*) FROM national_parks");
$parksFullDataBase  = $stmt->fetchColumn();
var_dump($parksFullDataBase);

$totalPages = $parksFullDataBase / $limit;
session_start();
$_SESSION['totalPages'] = $totalPages;



$require = ['name','location','date_established_first_section','date_established_second_section','date_established_third_section','area_in_acres','park_img','describtion'];




if (Input::input_not_empty($require) && Input::is_date_valid()) {

    $firstDate = Input::get('date_established_first_section');
    $secondDate = Input::get('date_established_second_section');
    $thirdDate = Input::get('date_established_third_section');


        $name = Input::get('name');
        $location = Input::get('location');
        $date_established = $firstDate . '-' . $secondDate . '-' . $thirdDate;
        $area_in_acres = Input::get('area_in_acres');
        $park_img = Input::get('park_img');
        $describtion = Input::get('describtion');

        $stmt = $dbc->prepare('INSERT INTO national_parks(name,location,date_established,area_in_acres,park_img,describtion)
        VALUES (:name,:location,:date_established,:area_in_acres,:park_img,:describtion)');


        $stmt->bindValue(':name', $name, PDO::PARAM_STR);
        $stmt->bindValue(':location', $location, PDO::PARAM_STR);
        $stmt->bindValue(':date_established', $date_established, PDO::PARAM_STR);
        $stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_INT);
        $stmt->bindValue(':park_img', $park_img, PDO::PARAM_STR);
        $stmt->bindValue(':describtion', $describtion, PDO::PARAM_STR);

        $stmt->execute();

}





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


         <!-- Trigger/Open The Modal -->
         <button id="myBtn">Create a park</button>

         <!-- The Modal -->
         <div id="myModal" class="modal">

           <!-- Modal content -->
           <div class="modal-content">
             <span class="close">x</span>

             <?PHP require_once 'national_parks_new_park.php' ?>

           </div>
         </div>



        <script src="/js/jquery-1.12.0.js"></script>
        <script>

var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


        </script>
    </body>
</html>
