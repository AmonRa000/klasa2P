<?php
//skrypt.php
$liczba1=$_POST['liczba1'];
$liczba2=$_POST['liczba2'];
$operacje =$_POST['operacje'];
switch($operacje) {
    case 'dodawanie':
        echo $liczba1+$liczba2;
        break;
    case 'odejmowanie':
        echo $liczba1-$liczba2;
        break;
    case "mnozenie":
        echo $liczba1*$liczba2;
        break;
    case "dzielenie":
        echo $liczba1/$liczba2;
        break;
    }
?>