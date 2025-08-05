<?php
//prosta tablica
$tablica =[];//deklaracja tablcy
$tablica[] = 1;//dodawanie elementów do tablicy
$tablica[] = 2;
$tablica[] = 3;

//dodawanie elementu na początku tablicy
array_unshift($tablica,0);
//usuwanie ostatniego elementu z tablicy
array_pop($tablica)
//usuwanie pierwszego elementu z tablicy
array_shift($tablica)

print_r($tablica)

/*
Wykonaj sumę elementów z tablicy(pierwszej i ostatniej)
*/

$t =[];//deklaracja tablcy
$t[] = 1;//dodawanie elementów do tablicy
$t[] = 2;
$t[] = 3;
$a = array_pop($t);
$b = array_shift($t);

echo "<br>";
echo $a+$b;
?>