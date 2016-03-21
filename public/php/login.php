<?php
require_once '../../Input.php';
require_once '../../Auth.php';
require_once 'Log.php';


$correctName = Input::get('username', '');
$correctPassword = Input::get('password', '');

if (Auth::check()) {
    header('Location: /php/authorize.php');
    die();
}else if(Auth::attempt($correctName,$correctPassword)){
    $logFile = new Log();
    $logFile->logMessage('loggedIN','user has logged in successfully');
    header('Location: /php/authorize.php');
    die();
}else if(input::has('username') && input::has('password')){
    $logFile = new Log();
    $logFile->logMessage('Failed','user failed to input correct username or password');

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
