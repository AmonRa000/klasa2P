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

$query = "SELECT ksaizki.tytul, ksiazki.imie, ksiazki.nazwisko FROM ksiazki";
$result = mysqli_query($conn, $query);

if(mysql_num_rows($result) > 0){
    ?>
    <h1>Wynik</h1>
    <?php
    while($row = mysqli_fetch_row($result)){
        ?>
        <p>Książka <i><?=$row['tytul']?></i> została napisana przez <strong><?=$row['imie']?> <?=$row['nazwisko']?></strong></p>
        <?php
    
    }
}


$conn->close();
?>
</body>
</html>