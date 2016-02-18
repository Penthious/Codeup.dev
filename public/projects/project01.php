<?php

$a = 0;
$b = 1;
$c = 1;
$x = 0;
$i =0;

echo $a.'<br>';
echo $b.'<br>';
echo $c.'<br>';


while ($i <=100) {
    $x=$b+$c;
    $b=$c;
    $c=$x;



echo $c.'<br>';
    $i++;
}

 ?>
