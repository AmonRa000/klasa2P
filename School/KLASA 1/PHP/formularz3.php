<html>
    <head>
        <title>Formularz-tablice</title>
    </head>
    <body>
<?php
$tablica=[];
if($SERVER["REQUEST_METHOD"] == "POST"){
$dodaj = $_POST["dodaj"];
$tablica[]=$dodaj;
}
?>
        <h3>Formularz dodawania elementów do tablicy</h3>
        <form action="tablice.php" method="post">
        <input type="text" name="dodaj" placeholder="Dodaj element do tablicy"><br>
        <input type="submit" value="Wyślij zapytanie">
        <h1>elementy dodane do tablicy</h1>
        </form>
<?php
foreach($tablica as $dodaj){
    echo "<li>".$dodaj."</li>";
}
?>
    </body>
</html>
