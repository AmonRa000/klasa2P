<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona administracyjna</title>
</head>
<style>
    h1,p{
        text-align: center;
        font-family: Arial, sans-serif;
    }
</style>
<body>
<?php include 'menu.php'; ?>
<h1>Panel administracyjny</h1>
<p>Status: <?php echo isset($_SESSION['login']) ? "Zalogowany jako " . $_SESSION['login'] : "Niezalogowany"; ?></p>
<?php include 'stopka.php'; ?>

</body>
</html>
