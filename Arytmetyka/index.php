<?php
include_once 'Arytmetyka.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arytmetyka</title>
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
<li>Suma liczb <strong><?=$obiekt->liczbaA?></strong> i <strong><?=$obiekt->liczbaB?></strong> jest równa <strong><?=$obiekt->suma()?></strong></li>
<li>Różnica liczb <strong><?=$obiekt->liczbaA?></strong> i <strong><?=$obiekt->liczbaB?></strong> jest równa <strong><?=$obiekt->roznica()?></strong></li>
<li>Iloczyn liczb <strong><?=$obiekt->liczbaA?></strong> i <strong><?=$obiekt->liczbaB?></strong> jest równy <strong><?=$obiekt->iloczyn()?></strong></li>
<li>Iloraz liczb <strong><?=$obiekt->liczbaA?></strong> i <strong><?=$obiekt->liczbaB?></strong> wynosi <strong><?=$obiekt->iloraz()?></strong></li>
<li>Reszta z dzelenia liczb <strong><?=$obiekt->liczbaA?></strong> przez <strong><?=$obiekt->liczbaB?></strong> jest równa <strong><?=$obiekt->reszta()?></strong></li>
<li>Liczba <strong><?=$obiekt->liczbaA?></strong> do potęgi <strong><?=$obiekt->liczbaB?></strong> jest równa <strong><?=$obiekt->potega()?></strong></li>
</ul>


</body>
</html>