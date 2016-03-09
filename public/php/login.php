<?php
require_once 'functions.php';
session_start();
$username = 'Tomas';
$password = 'password';
$loggedIn = false;
var_dump($_SESSION);

$correctName = inputHas('username') ? inputGet('username') : '';
$correctPassword = inputHas('password') ? inputGet('password') : '';

if(isset($_SESSION['LOGGED_IN_USER']) && $_SESSION['LOGGED_IN_USER'] != ''){
    header('Location: /php/authorize.php');
    die();

}

if ($correctName == $username && $correctPassword == $password) {
    $_SESSION['LOGGED_IN_USER'] = $username;
    header('Location: /php/authorize.php');
    die();

}else if ($correctName != '' || $correctPassword != ''){
    echo "Please enter the correct username or password.";
}

 ?>
 <!DOCTYPE html>
 <html>
     <head>
         <link rel="stylesheet" href="/css/">
         <meta charset="utf-8">
         <title></title>
     </head>
     <body>
         <form method="post">
             <label for="username">Username</label>
             <input type="text" name="username">
             <label for="password">Password</label>
             <input type="password" name="password">
             <input type="submit">
         </form>
         <script src="/js/jquery-1.12.0.js"></script>
         <script src="/js/"></script>
     </body>
 </html>
