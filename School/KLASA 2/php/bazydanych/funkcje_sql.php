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

$query = "SELECT UPPER(CONCAT(imie, ' ',nazwisko)) as Pracownik FROM pracownicy";
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0){
    ?>
    <ul>
    <?php
    while($row = mysqli_fetch_assoc($result)){
        ?>
        <li><?=$row['Pracownik']?></li>
        <?php
    }   
    ?>
    </ul>
    <?php
}   


$conn->close();
?>
</body>
</html>