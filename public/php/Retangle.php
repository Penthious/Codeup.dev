<?php

class Retangle
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->set_width($width);
        $this->set_height($height);
    }

    protected function set_width($width)
    {
        $this->width = (int) $width;
    }

    protected function set_height($height)
    {
        $this->height = (int) $height;
    }

    public function show_width()
    {
        return $this->width;
    }

    public function show_height()
    {
        return $this->height;
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
