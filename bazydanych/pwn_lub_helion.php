<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ksiazki</title>
</head>
<style>
    table,td,tr,th{
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>
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

$query = "SELECT wypozyczenia.Nr_transakcji, wypozyczenia.Data_wypozyczenia, wypozyczenia.Data_zwrotu, DATEDIFF(IFNULL(Data_zwrotu,NOW()),Data_wypozyczenia) AS DNI FROM wypozyczenia ORDER BY DNI ASC";
$result = mysqli_query($conn, $query);
?>
<table>
    <tr>
            <th>
                Nr_transakcji
            </th>
            <th>
                Data_wypozyczenia
            </th>
            <th>
                Data_zwrócenia
            </th>
            <th>
                Liczba dni
            </th>
    </tr>
    <?php
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?=$row['Nr_transakcji']?></td>
                <td><?=$row['Data_wypozyczenia']?></td>
                <td><?=$row['Data_zwrotu']?></td>
                <td><?=$row['DNI']?></td>
            </tr>
            <?php
        }   
    }  
    ?>
</table>
 

<?php
$conn->close();
?>
</body>
</html>