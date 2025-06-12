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
<style>
    h1, p {
        text-align: center;
        font-family: Arial, sans-serif;
    }
    p.ciastko{
        text-align: left;
        font-size: medium;
    }
</style>
<body>
<?php include 'menu.php'; ?>
<h1>Strona Główna</h1>
<h2>Jakie powinno być dobre hasło?</h2>

<p class="ciastko">
    <?php 
    if(isset($_SESSION["zawartosc"])) {
        echo $_SESSION["zawartosc"];
    }else{
        echo "Ciasteczko nie jest ustawione.";
    }
    ?>
</p>

<?php include 'stopka.php'; ?>
</body>
</html>
