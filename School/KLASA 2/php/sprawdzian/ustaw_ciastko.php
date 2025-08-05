<?php
session_start();

    $nazwa_ciastka = $_POST['nazwa_ciastka'];
    $zawartosc = $_POST['zawartosc'];
    $_SESSION["zawartosc"] = $zawartosc;
    $czas_ciastka = $_POST['czas_ciastka'];

    setcookie($nazwa_ciastka, $zawartosc, time() + $czas_ciastka);
    header($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona administracyjna</title>
</head>
<body>
        <form method="post">
            <label for="nazwa_ciastka">Nazwa ciasteczka:</label>
            <input type="text" name="nazwa_ciastka" id="nazwa_ciastka" value="good_password_definition" readonly>

            <label for="czas_ciastka">Wygasa: (w sekundach)</label>
            <input type="number" name="czas_ciastka" id="czas_ciastka" value="<?= isset($czas_ciastka) ? $czas_ciastka : 3600 ?>" required>

            <input type="submit" name="Ustaw" value="Ustaw">
            <br>

            <label for="zawartosc">Zawartość:</label><br>
            <textarea name="zawartosc" id="zawartosc" cols="40" rows="3" required><?= isset($_SESSION['zawartosc']) ? $_SESSION['zawartosc'] : "" ?></textarea>
            <br>
        </form>
</body>
</html>
