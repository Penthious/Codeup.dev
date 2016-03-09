<?php
session_start();
if(!isset($_SESSION['LOGGED_IN_USER']) || $_SESSION['LOGGED_IN_USER'] == ''){
    header('Location: /php/login.php');
    die();
}
$username = (isset($_SESSION['LOGGED_IN_USER'])) ? $_SESSION['LOGGED_IN_USER'] : '';


?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/css/">
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php echo 'You are now logged in' ?>
        <a href="/php/logout.php">log-out</a>
        <script src="/js/jquery-1.12.0.js"></script>
        <script src="/js/"></script>
    </body>
</html>
