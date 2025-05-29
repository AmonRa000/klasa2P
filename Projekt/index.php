<?php
    $aktywny=(isset($_GET['Page']) && $_GET['Page'] == "czytelnicy") ? 'aktywny':'';
?>
<!DOCTYPE html>
<html lang="ppl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
    <!--Czcionki-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">

</head>
<style>
    table,tr,td,th{
        border: 1px black solid;
        border-collapse: collapse;
    }
</style>
<body>
    <div class="row">
    <div class="column left">
        <a href="index.php?page=glowna">Strona główna</a>
        <a href="index.php?page=czytelnicy" class="<?=$aktywny?>">Tabela czytelnicy</a>
        <a href="index.php?page=dzialy">Tabela działy</a>
        <a href="index.php?page=dzialy2">Tabela działy2</a>
        <a href="index.php?page=ksiazki">Tabela książki</a>
        <a href="index.php?page=pracownicy">Tabela pracownicy</a>
        <a href="index.php?page=stanowiska">Tabela stanowiska</a>
        <a href="index.php?page=wypozyczalnia">Tabela wypożyczenia</a>   
    </div>
    <div class="column right">
        <?php
            if (isset($_GET['page'])) {
            if (file_exists('pages/' . $_GET['page'] . '.php')) {
                include 'pages/' . $_GET['page'] . '.php';
            } else {
                echo '<h1>Nie znaleziono żądanej strony</h1>';
            }
            } else {
            include 'pages/glowna.php';
            }
        ?>
    </div>
</body>
</html>
