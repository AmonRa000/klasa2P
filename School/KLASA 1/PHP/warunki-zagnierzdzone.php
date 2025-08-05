<?php
//warunki zagnieżdżone

$a=6;
$b=5;
$c=1;

if ($a>$b){
    echo $a. "jest większe od"  .$b;
    if($a>$c)
    echo $a. "jest wielsze od" .$c;
}
?>