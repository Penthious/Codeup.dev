<?php
require_once '../../Input.php';
require_once '../../Auth.php';
$setUserName = Input::get('username','');
$setUserPassword = Input::get('password','');
if ($setUserName != '' && $setUserPassword != '') {
    $hashedPassword= password_hash($setUserPassword,PASSWORD_BCRYPT);
    $authorize = new Auth;
    $authorize->setPassword($setUserName,$hashedPassword);
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
