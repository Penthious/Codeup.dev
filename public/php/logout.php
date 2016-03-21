<?php

require_once '../../Auth.php';
Auth::logout();

 ?>
 <!DOCTYPE html>
 <html>
     <head>
         <link rel="stylesheet" href="/css/">
         <meta charset="utf-8">
         <title></title>
     </head>
     <body>
         <form action="login.php" method="post">
             <button type="submit" name="button">Log-out</button>
         </form>
         <script src="/js/jquery-1.12.0.js"></script>
         <script src="/js/"></script>
     </body>
 </html>
