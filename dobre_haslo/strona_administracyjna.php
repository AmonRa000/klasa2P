<?php
session_start();

?>
<?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
        if(isset($_POST["Ustaw"]))
        {
            $ciastko=setcookie($_POST['nazwa_ciastka'],$_POST['zawartosc'],time() +$_POST['czas_ciastka']);
        }
    } 
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
<p><?php echo isset($_SESSION['login']) ? "Zalogowany jako " . $_SESSION['login'] : "Musisz być zalogowany, aby ustawić ciastko"; ?></p>
<form method="post">
    <label for="nazwa_caistka">Nazwa ciasteczka:</label>
    <input type="text" name="nazwa_ciastka" value="good_password_definition">
    <label for="czas_ciastka">Wygasa: (w sekundach)</label>
    <input type="number" name="czas_ciastka" value="3600" required>
    <input type="submit" name="Ustaw" value="Ustaw"><br>
    <label for="zawartosc">Zawartość:</label><br>
    <textarea name="zawartosc" id="zawartosc"  cols="40" rows="3" required></textarea><br>
</form>
<?php include 'stopka.php'; ?>

</body>
</html>
