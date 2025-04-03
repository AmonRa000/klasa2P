<?php
session_start();

if(!isset($_COOKIE["good_password_definition"])) {
    unset($_SESSION["zawartosc"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
</head>
<body>
<h2>Twój ulubiony film to X</h2>
<a href="ustaw_ciastko">ustaw ciastko</a>
<p class="ciastko">
    <?php 
    if(isset($_SESSION["zawartosc"])) {
        echo $_SESSION["zawartosc"];
    }else{
        echo "Ciasteczko nie jest ustawione.";
    }
    ?>
</p>
</body>
</html>
