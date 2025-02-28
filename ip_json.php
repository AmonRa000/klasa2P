<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Sprawdź przybliżoną lokalizację adresu IP v.4</p>
    <form method="post">
        <a>http://ip=api.com/json/</a>
        <label for=""></label>
        <input type="text" name="IP">
        <input type="submit" value="Sprawdź IP">
    </form>
    <?php
    file_get_contents("http://ip=api.com/json/",$_POST['IP'] );
    ?>
</body>
</html>