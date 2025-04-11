<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

$query = "SELECT Tytul, Imie, Nazwisko FROM ksiazki";
if($result = mysqli_query($conn, $query)){
    while($row = mysqli_fetch_row($result)){
        ?><p>Książka <?=$row['Tytul']?> została napisana przez<?=$row['imie'].$row['nazwisko']?></p><?php
    }
}



?>
</body>
</html>