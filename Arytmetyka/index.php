<?php
include_once 'Arytmetyka.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    ul{
        font-size:20px;
        background-color:cyan;
    }
</style>
<?php
$obiekt = new Arytmetyka(9,1);
?>
<body>
<ul style="list-style-type:square">
<li>Suma liczb <b><?=$obiekt->liczbaA?></b> i <b><?=$obiekt->liczbaB?></b> jest równa <b><?=$obiekt->suma()?></b></li>
<li>Różnica liczb <b><?=$obiekt->liczbaA?></b> i <b><?=$obiekt->liczbaB?></b> jest równa <b><?=$obiekt->roznica()?></b></li>
<li>Iloczyn liczb <b><?=$obiekt->liczbaA?></b> i <b><?=$obiekt->liczbaB?></b> jest równy <b><?=$obiekt->iloczyn()?></b></li>
<li>Iloraz liczb <b><?=$obiekt->liczbaA?></b> i <b><?=$obiekt->liczbaB?></b> wynosi <b><?=$obiekt->iloraz()?></b></li>
<li>Reszta z dzelenia liczb <b><?=$obiekt->liczbaA?></b> przez <b><?=$obiekt->liczbaB?></b> jest równa <b><?=$obiekt->reszta()?></b></li>
<li>Liczba <b><?=$obiekt->liczbaA?></b> do potęgi <b><?=$obiekt->liczbaB?></b> jest równa <b><?=$obiekt->potega()?></b></li>
</ul>


</body>
</html>