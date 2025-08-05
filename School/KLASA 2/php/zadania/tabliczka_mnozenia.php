<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabliczka Mnożenia</title>
</head>
<style>
    table{
        border: 1px solid black;
        font-family: Verdana;
        font-size: large;
        border-collapse: collapse;
    }
    th,tr{
        border: 1px dashed black;
        padding: 5px;
        background-color: burlywood;
    }
    td{
        border: 1px dashed black;
        background-color: beige;
        padding: 5px;
        text-align: center;
    }
    tr:nth-child(2) td:nth-child(2),
    tr:nth-child(3) td:nth-child(3),
    tr:nth-child(4) td:nth-child(4),
    tr:nth-child(5) td:nth-child(5),
    tr:nth-child(6) td:nth-child(6),
    tr:nth-child(7) td:nth-child(7),
    tr:nth-child(8) td:nth-child(8),
    tr:nth-child(9) td:nth-child(9),
    tr:nth-child(10) td:nth-child(10),
    tr:nth-child(11) td:nth-child(11) {
    background-color: bisque;
    }
</style>
<body>
    <table>
        <caption>Tabliczka mnożenia</caption>
    <?php
        echo "<th>"."× "."</th>";
        for($i=1;$i<=10;$i++){
            echo "<th>".$i."</th>";
        }
        for($j=1;$j<=10;$j++){
            echo "<tr><th>".$j."</th</tr>";
            for($a=1;$a<=10;$a++){
                echo "<td>".$a*$j."</td>";
            }
        }
    ?>
    </table>
</body>
</html>