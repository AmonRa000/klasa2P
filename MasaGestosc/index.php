<?php
include_once 'MasaGestosc.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obliczanie masy kulek</title>
</head>
    <style>

    </style>
<body>
    <ol type="I">
            <?=$obiekt = new MasaGestosc('gips',0.05);?>
            <li>masa kulki <strong><?=$obiekt->substancja ?></strong> o promienu <u>5cm wynosi</u> <?=$obiekt->obliczMase()?>kg<sup>3</li>
            <?=$obiekt = new MasaGestosc("rtęć",0.05);?>
            <li>masa kulki <strong><?=$obiekt->substancja ?></strong> o promienu <u>5cm wynosi</u> <?=$obiekt->obliczMase()?>kg<sup>3</li>
            <?=$obiekt = new MasaGestosc("złoto",0.05);?>
            <li>masa kulki <strong><?=$obiekt->substancja ?></strong> o promienu <u>5cm wynosi</u> <?=$obiekt->obliczMase()?>kg<sup>3</li>
            <?=$obiekt = new MasaGestosc("woda",0.05);?>
            <li>masa kulki <strong><?=$obiekt->substancja ?></strong> o promienu <u>5cm wynosi</u> <?=$obiekt->obliczMase()?>kg<sup>3</li>
    </ol>
</body>
</html>
