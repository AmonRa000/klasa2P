<?php
$normalny=$_POST['normalny'];
$ulgowy=$_POST['ulgowy'];
$godziny=$_POST['godziny'];
$karta=$_POST['karta'];
$cenan=15;
$cenau=11;
$suma=0;
if($godziny>=4){
    $cenan=$cenan+40;
    $cenau=$cenau+9;
    $suma=$cenan+$cenau;
    echo "cena biletow: ".$suma." zł <br>";
}if($ulgowy==10){
    $normalny+1;
}else{
    $normalny+0;
}


if($karta=="Tak"){
    $suma=$godziny*$normalny*$cenan+$godziny*$ulgowy*$cenau*0.9;
}else{
    $suma=$godziny*$normalny*$cenan+$godziny*$ulgowy*$cenau;
}

echo "Całkowity koszt wstępu na basen to: ".$suma." zł";







?>