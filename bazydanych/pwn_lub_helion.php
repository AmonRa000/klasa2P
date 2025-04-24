<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksiazki</title>
</head>
<body>
<?php
$db = "borowy";
$host = "localhost";
$user = "borowy";
$password = "qwerty"; 

try{
    $conn = mysqli_connect($host, $user, $password, $db);
    echo "połączono z bazą";
}catch(mysqli_sql_exception){
    echo "wystąpił błąd";
}
//dokończ
$query = "SELECT ksiazki.Sygnatura, ksiazki.Tytul, ksiazki.Imie, ksiazki.Nazwisko, ksiazki.Wydawnictwo, ksiazki.Rok_wyd, ksiazki.Cena FROM Ksiazki WHERE ksiazki.Wydawnictwo = "PWN" or ksiazki.Wydawnictwo="Helion" AND ksiazki.Rok_wyd=BETWEEN";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    ?>
    <h1>Wynik</h1>
    <?php
    while($row = mysqli_fetch_assoc($result)){
        
    }   
}   

$conn->close();
?>
</body>
</html>