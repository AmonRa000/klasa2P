<?php
$imie = $_POST['imie'];
$nazwisko= $_POST['nazwisko'];
$wiek= $_POST['wiek'];

$plik = fopen("dane.txt","w");
    fwrite($plik,$imie."\n");
    fwrite($plik,$nazwisko."\n");
    fwrite($plik,$wiek."\n");
fclose($plik);

echo "Dane zostały wysłane do pliku dane.txt";
?>