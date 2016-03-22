<?php

class Retangle
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height  = $height;
    }

    public function get_area_of_retangle()
    {
        return $this->width * $this->height;
    }

    public function get_perimeter()
    {
        if ($this->width == $this->height) {
            return $this->width * 4;
        }else {
            return false;
        }
    }

}



?>
