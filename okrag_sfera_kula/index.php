<?php
include_once 'okrag_sfera_kula.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-color:#219ebc;
        color:#023047;
        font-family:Garamond;
        font-size:18px;
        padding:20px;
        font-weight:bold;
    }
    table{
        background-color:#8ecae6;
        width:100%;
        border-collapse:collapse;
    }
    td{
        border:4px solid #ffb703;
        text-align:center;
        padding:10px;
    }
</style>
<?php
$obiekt = new okragStrefaKula($rand = rand(0,99))
?>
<body>
    <table>
        <tr><td colspan="3">Promien kuli: r = <?=$rand ?></tr>
        <tr><td>Obwód</td><td>Pole powierzchni</td><td>Objętość</td></tr>
        <tr><td>L = 2πr</td><td>p = 4πr<sup>2</sup></td><td>V = &frac13;πr<sup>3</sup> </td></tr>
        <tr><td><?=$obiekt->obwod($rand)?></td><td><?=$obiekt->pole($rand)?></td><td><?=$obiekt->objentosc($rand)?></td></tr>
    </table>
    
</body>
</html>