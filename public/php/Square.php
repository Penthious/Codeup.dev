<?php

class Square extends Retangle
{
    public $height;
    public $width;

    public function __construct($height)
   {
       parent::__construct($height, $height);
   }

    public function get_perimeter()
    {
        return parent::get_perimeter();
    }

    public function get_area_of_retangle()
    {
        return parent::get_area_of_retangle();
    }
}


?>
