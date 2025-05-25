<?php
$db = "borowy";
$host = "localhost";
$user = "borowy";
$password = "qwerty"; 

try{
    $conn = mysqli_connect($host, $user, $password, $db);
}catch(mysqli_sql_exception){
    echo "wystąpił błąd";
}
?>