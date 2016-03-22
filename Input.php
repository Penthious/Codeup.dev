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

    public static function input_not_empty($require)
    {
        foreach ($require as  $key) {
            if (!isset($_POST[$key])) {
                return false;
            } else if ($_POST[$key] == '') {
                return false;
            }
        }
        return true;
    }

    public static function is_date_valid()
    {
        if (strlen(Input::get('date_established_first_section')) == 4
        && strlen(Input::get('date_established_second_section')) == 2
        && strlen(Input::get('date_established_third_section')) == 2) {
            if (is_numeric(Input::get('date_established_first_section'))
            && is_numeric(Input::get('date_established_second_section'))
            && is_numeric(Input::get('date_established_third_section'))
            && is_numeric(Input::get('area_in_acres'))) {
            }else {
                return false;
            }
        }else{
            return false;
        }
        return true;
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
