<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Alfabet</legend>
        <form action="post">

        
        <?php

        foreach(range('a','z') as $litera){
            ?>
            <label for="litery"></label>
            <input type="checkbox" name="lietry" id="litery"><?=$litera?>
            <?php
        }
        ?>
        <input type="submit" name="wyslij">
    </form>
    </fieldset>
</body>
</html>