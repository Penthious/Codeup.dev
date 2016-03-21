<?php
require_once 'Log.php';

class Auth
{
    public static $password;

    public static function attempt($username,$password){
        self::getPassword();
        if ($username == 'Tomas' && password_verify($password, self::$password)) {
            session_start();
            $_SESSION['LOGGED_IN_USER'] = $username;
            return true;
        }else if ($username != '' || $password != ''){
        return false;
        }
    }
    public static function check(){
        return isset($_SESSION['LOGGED_IN_USER']) && $_SESSION['LOGGED_IN_USER'] != '';
    }
    public static function user(){
        return $SESSION['LOGGED_IN_USER'];

    }
    public static function logout(){
        session_start();
        session_unset();
        session_regenerate_id(true);
    }
    public static function getPassword(){
        $savedPassword = file_get_contents('password.txt');
        self::$password = trim($savedPassword);
    }
    public static function setPassword($username,$password){
        $filename = 'password.txt';
        $handle = fopen($filename, 'a');
        fwrite($handle, $username . ',' . $password . PHP_EOL);
        fclose($handle);
    }
}

 ?>
