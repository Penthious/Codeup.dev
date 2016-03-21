<?php

class Input
{

    public static function has($key)
    {
        if (isset($_REQUEST[$key])){
        return true;
        }
    }

    public static function get($key, $default = null)
    {
        if (self::has($key)) {
            return $_REQUEST[$key];
        }else {
            return $default;
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
