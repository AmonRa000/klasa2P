<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
</head>
<style>
    h1,p{
        text-align: center;
        font-family: Arial, sans-serif;
    }
</style>
<body>
<?php include 'menu.php'; ?>
<h1>Moja Strona</h1>
<p>
    <?php 
    if(isset($_SESSION["login_status"]) != false){
        echo "Witaj ".$_SESSION['login'];
    }else{
        echo "Witaj gościu";
    }
    ?>
    </p>
<?php include 'stopka.php'; ?>

</body>
</html>