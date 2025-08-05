<?php
$zdanie=" jest wieksze od ";
$a=4;
$b=3;
$c=5;
$d=1;

if($a>$b){
    echo $a.$zdanie.$b."<br>";
} else {
    echo $b.$zdanie.$a."<br>"; 
}
if($b>$c){
    echo $b.$zdanie.$c."<br>";
} else {
    echo $c.$zdanie.$b."<br>";
}
if($c>$a){
    echo $c.$zdanie.$a."<br>";
} else {
    echo $a.$zdanie.$c."<br>"; 
}
if($c>$d){
    echo $c.$zdanie.$d."<br>";
} else {
    echo $d.$zdanie.$c."<br>"; 
}
if($d>$a){
    echo $d.$zdanie.$a."<br>";
} else {
    echo $a.$zdanie.$d."<br>"; 
}
if($d>$b){
    echo $d.$zdanie.$b."<br>";
} else {
    echo $b.$zdanie.$d."<br>"; 
}
echo "Najwieksza liczba to ".max($a,$b,$c,$d)."<br>";
echo "Najmniejsza liczba to ".min($a,$b,$c,$d)."<br>";

?>