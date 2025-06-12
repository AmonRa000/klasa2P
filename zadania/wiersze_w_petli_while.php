<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela</title>
</head>
<style>
    table,td{
        border-collapse:collapse;
        background-color:lightgray;
        border: solid 1px gray;
        padding: 10px;
    }
</style>
<body>
    <table>
    <?php
    $i=1;
    while($i<6){
        echo "<tr><td>To jest wiersz numer ".$i."</tr>";
        $i++;
    }
    ?>
    </table>
</body>
</html>