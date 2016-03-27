<?php

require_once 'Retangle.php';
require_once 'Square.php';

$areaOfRetangle = new Retangle(15, 15);
echo $areaOfRetangle->get_area_of_retangle() . PHP_EOL;
echo $areaOfRetangle->get_perimeter() . PHP_EOL;
echo $areaOfRetangle->show_width() . PHP_EOL;
echo $areaOfRetangle->show_height() . PHP_EOL;

$perimeterOfSquare = new Square(10);
echo $perimeterOfSquare->get_perimeter() . PHP_EOL;
echo $perimeterOfSquare->get_area_of_retangle() . PHP_EOL;
echo $perimeterOfSquare->show_width() . PHP_EOL;
echo $perimeterOfSquare->show_height() . PHP_EOL;




?>
