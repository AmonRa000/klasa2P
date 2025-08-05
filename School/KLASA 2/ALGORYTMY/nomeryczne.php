<?php
$dokladnosc = 0.000000000001;
$liczba = 9;
$a = 1;
$b = $liczba/$a;
while(abs($a-$b)>=$dokladnosc){
    $a=($a+$b)/2;
    $b = $liczba/$a;
}
echo $a;

?>