<?php
//skrypt.php
$imie=$_POST['imie'];
$nazwisko=$_POST['nazwisko'];
$mial=$_POST['mail'];
$haslo=$_POST['haslo'];
$haslo2=$_POST['haslo2'];
if($haslo == $haslo2){
    echo "Pomyślnie zarejestrowano";
    echo "<br>";
    echo "Witaj ".$imie." ".$nazwisko;
}else{
    echo "Nieprawidłowe hasło, sprawdź czy twoje hasło w obu przypadkach jest takie samo";
}
?>
<br>
<a href="logowanie.html" title="Powrót do strony głównej">Powrót do strony głównej</a>