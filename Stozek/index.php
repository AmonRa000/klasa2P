<?php
include_once "STOZEK.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STOZEK</title>
    <style>
        body{
            text-align: center;
            font-family: Consolas;
            background-color: lightpink;
            color: darkmagenta;
            font-size: 50px;
            margin-top: 100px;
            margin-bottom: 100px;
            margin-left: 0;
            margin-right: 0;
        }
        div{
            display: inline-block;
            border-top: 3px solid magenta;
            border-bottom: 3px solid magenta;   
        }
    </style>
</head>
<body>
    <?php
    $r = 123.45;
    $h = 678.09;
    $DodawanieObj = new STOZEK($r, $h);
    ?>
    <div>
        <p>Stożek</p>
        <p>Promień: R = <?= number_format($r, "2",","," ") ?> cm</p>
        <p>Wysokość: H = <?= number_format($h, "2",","," ") ?> cm</p>
        <p>Pole: P = <?= number_format($DodawanieObj->pole_calkowite(), "2", ",", " ") ?> cm²</p>
        <p>Objętość: V = <?= number_format($DodawanieObj->objetosc(), "2", ",", " ") ?> cm³</p>
    </div>
</body>
</html>