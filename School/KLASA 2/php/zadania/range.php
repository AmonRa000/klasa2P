<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php
    $parzyste = range(0,12,2);
    print_r ($parzyste);
    ?>
    </pre>
    <?php
    $dziesiatki = range(-10,100,10);
    foreach($dziesiatki as $element){
    echo $element;
    }
    echo "<br>";
    $polowki = range(-5.5,5.5,0.5);
    foreach($polowki as $element2){
    print_r ($element2);
    }
    echo "<br>";
    $litery_od_em = range('e','m');
    foreach($litery_od_em as $litery){
    print $litery;
    }
    echo "<br>";
    $litery_wstecz = range('m','e');
    foreach($litery_wstecz as $litery2){
    print $litery2;
    }
    ?>
</body>
</html>