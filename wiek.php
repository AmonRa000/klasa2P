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
        margin: 10px;
        border: solid black 2px;
    }
    h2{
        color: indigo;
        margin: 10 px;
        border: dotted 2px; 
    }
</style>
<body>
    <?php   $wiek=rand(0,100)  ?>
    <h1>     Mam <?php  echo $wiek;
    if($wiek = 2 or 3 or 4){
        echo " lata";
    }elseif($wiek = 1 ){
        echo " rok";
    }elseif($wiek = 0 ){
        echo " lat";
    }
    ?></h1>

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