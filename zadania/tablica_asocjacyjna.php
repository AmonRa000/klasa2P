<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablica asocjacyjna</title>
</head>
<style>
    table,td,tr,th{
        border-collapse:collapse;
        border:dotted 1px black;
        padding:3px;
    }
    .krsort{
        position:absolute;
        top:8px;
        left:40%;
    }
    .arsort{
        position:absolute;
        top:320px;
        left:40%;
        
    }
</style>
<body>
    <?php
    $filmy = array("Skazani na Shawshank"=> "dramat",
        "Nietykalni"=> "biograficzny",
        "Władca Pierścieni"=> "fantasy",
        "Pulp Fiction"=> "gangserski",
        "Siedem"=> "kryminał",
        "Podziemny krąg"=> "thriller",
        "Django"=> "western",
        "Król lew"=> "animacja",
        "Avengers: Wojna bez granic"=> "akcja",
        "Dobry, zły i brzydki"=> "western");
    ?>
    <table>
        <caption>Sortowanie rosnąco według wartości</caption>
    <?php
            ksort($filmy);
            echo "<th>klucze</th>";
            echo "<th>wartości</th>";
        foreach($filmy as $Key => $value){
            echo "<tr><td>".$Key."</td><td>".$value."</td></tr>";
        }
    ?>
    </table>

    <table>
        <caption>Sortowanie rosnąco według kluczy</caption>
    <?php 
            asort($filmy);
            echo "<th>klucze</th>";
            echo "<th>wartości</th>";
        foreach($filmy as $Key => $value){
            echo "<tr><td>".$Key."</td><td>".$value."</td></tr>";
        }
        echo "<br>";
    ?>
    </table>

    <table class="krsort">
        <caption>Sortowanie malejąco według wartości</caption>
    <?php
            krsort($filmy);
            echo "<th>klucze</th>";
            echo "<th>wartości</th>";
        foreach($filmy as $Key => $value){
            echo "<tr><td>".$Key."</td><td>".$value."</td></tr>";
        }
        echo "<br>";
    ?>
    </table>

    <table class="arsort">
        <caption>Sortowanie malejąco według kluczy</caption>
    <?php 
            arsort($filmy);
            echo "<th>klucze</th>";
            echo "<th>wartości</th>";
        foreach($filmy as $Key => $value){
            echo "<tr><td>".$Key."</td><td>".$value."</td></tr>";
        }
        echo "<br>";
    ?>
    </table>
    
</body>
</html>