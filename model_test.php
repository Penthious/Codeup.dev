<?php

require_once 'user.php';

$user = new User();
$user->first_name = 'bill';
$user->last_name = 'Leffew';
$user->email = 'tleffew1994@gmail.com';
$user->stored_password ='test123';
$user->save();

$user->first_name = 'todll';
$user->last_name = 'Lffew';
$user->email = 'tleffew1994@gmail.com';
$user->stored_password ='test123';
$user->save();



// var_dump($user->all());



?>
