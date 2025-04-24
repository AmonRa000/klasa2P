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

$query = "SELECT wypozyczenia.numer_transakcji, wypozyczenia.Data_wypozyczenia,  IFNULL(wypozyczenia.Data_zwrotu, DATEDIFF(IFNULL(Data_zwrotu,NOW()),Data_wypozyczenia) AS Dni FROM wypozyczenia ORDER BY Dni ASC";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){

    }   
}   


$conn->close();
?>
</body>
</html>