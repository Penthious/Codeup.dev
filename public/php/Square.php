<?php

class Square extends Retangle
{

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

    public function show_width()
    {
        return parent::show_width();
    }

    public function show_height()
    {
        return parent::show_height();
    }

}


?>
