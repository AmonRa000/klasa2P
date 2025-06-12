<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    h1{
        color: brown;
        padding: 10px;
        border: solid black 2px;
    }
    h2{
        color: indigo;
        padding: 10px;
        border: dotted 2px; 
    }
</style>
<body>
    <?php
    $wiek=rand(0,100);
    
    if($wiek == 1){
        $koncowka = " rok";
    }elseif(in_array($wiek % 10, [2, 3, 4]) && !in_array($wiek % 100, [12, 13, 14])){
        $koncowka = " lata";
    }else{
        $koncowka = " lat";
    }
    ?>
    <h1> Mam <?php  echo $wiek." ".$koncowka;?>

<h2> <?php if($wiek < 18){
        echo "Jeszcze nie możesz glosowac";
    }elseif($wiek < 21){
        echo "Mozesz tylko głosowac";
    }elseif($wiek < 30){
        echo "Możesz tylko głosować i kandydatować do Sejmu";
    }elseif($wiek < 35){
        echo "Możesz tylko głosować i kandydatować do Sejmu i Senatu";
    }elseif($wiek >= 35){
        echo "Możesz tylko głosować i kandydatować do Sejmu i Senatu oraz na Prezydenta";

    } ?> </h2>
</body>
</html>