<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <div class="row">
    <div class="column left">
        <a href="index.php?page=glowna">Strona główna</a>
        <a href="index.php?page=czytelnicy">Tabela czytelnicy</a>
        <a href="index.php?page=Czytelnicy">Tabela działy</a>
        <a href="index.php?page=Czytelnicy">Tabela działy2</a>
        <a href="index.php?page=Czytelnicy">Tabela książki</a>
        <a href="index.php?page=Czytelnicy">Tabela pracownicy</a>
        <a href="index.php?page=Czytelnicy">Tabela stanowiska</a>
        <a href="index.php?page=Czytelnicy">Tabela wypożyczenia</a>
        
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
    </div>
</body>
</html>
