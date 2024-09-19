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
    <?php   $wiek=rand(0,100)  ?>
    <h1>     Mam <?php  echo $wiek;
    if($wiek = 2 or 3 or 4){
        echo " lata";
    }elseif($wiek = 1 ){
        echo " rok";
    }elseif($wiek = 0 or 2 or 3 or 4 or 5 or 6 or 7 or 8 or 9 or 10 or 11 or 12 or 13 or 14 or 15 or 16 or 17 or 18 or 19   ){
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