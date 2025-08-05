<?php
    $aktywny1=(isset($_GET['page']) && $_GET['page'] == "glowna") ? 'aktywny1':'' ;
    $aktywny2=(isset($_GET['page']) && $_GET['page'] == "czytelnicy") ? 'aktywny2':'' ;
    $aktywny3=(isset($_GET['page']) && $_GET['page'] == "dzialy") ? 'aktywny3':'' ;
    $aktywny4=(isset($_GET['page']) && $_GET['page'] == "dzialy2") ? 'aktywny4':'' ;
    $aktywny5=(isset($_GET['page']) && $_GET['page'] == "ksiazki") ? 'aktywny5':'' ;
    $aktywny6=(isset($_GET['page']) && $_GET['page'] == "pracownicy") ? 'aktywny6':'' ;
    $aktywny7=(isset($_GET['page']) && $_GET['page'] == "stanowiska") ? 'aktywny7':'' ;
    $aktywny8=(isset($_GET['page']) && $_GET['page'] == "wypozyczalnia") ? 'aktywny8':'' ;

?>
<!DOCTYPE html>
<html lang="pl">
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
        <a href="index.php?page=glowna" class="<?=$aktywny1?>">Strona główna</a>
        <a href="index.php?page=czytelnicy" class="<?=$aktywny2?>">Tabela czytelnicy</a>
        <a href="index.php?page=dzialy" class="<?=$aktywny3?>">Tabela działy</a>
        <a href="index.php?page=dzialy2" class="<?=$aktywny4?>">Tabela działy2</a>
        <a href="index.php?page=ksiazki" class="<?=$aktywny5?>">Tabela książki</a>
        <a href="index.php?page=pracownicy" class="<?=$aktywny6?>">Tabela pracownicy</a>
        <a href="index.php?page=stanowiska" class="<?=$aktywny7?>">Tabela stanowiska</a>
        <a href="index.php?page=wypozyczalnia" class="<?=$aktywny8?>">Tabela wypożyczenia</a>   
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
