<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <title>Strona</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <div id="banner"></div>
    <div class="kontener">
        <?php
        //dodanie zewnetrznego skryptu w php
            require("skrypt.php");
        ?>
        <div class="formularz">
            <form action="skrypt.php" method="POST">
                <p><input type="text" name="imie" placeholder="Podaj imie"/></p>
                <p><input type="text" name="nazwisko" placeholder="Podaj nazwisko"/></p>
                <p><input type="number" name="wiek" placeholder="Podaj wiek"></p>
                <p><input type="submit" value="Pobierz dane" class="Przycisk"></p>

            </form>
        </div>
    </div>
    <div id="stopka"></div>
</body>
</html>