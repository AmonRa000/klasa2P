<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP zadanaie 1</title>
</head>
<body>
<?php
#1. 
    echo 'funkcja echo dziala prawidlowo <br>' ;
    echo "funkcja echo dziala prawidlowo <br>" ;
    echo ('funkcja echo dziala prawidlowo <br>') ;
    echo ("funkcja echo dziala prawidlowo <br>") ;
    echo "funkcja "."echo "."dziala "."prawidlowo <br>";
    echo 'funkcja '.'echo '.'dziala '.'prawidlowo <br>';
    echo ("funkcja "."echo "."dziala "."prawidlowo <br>");
    echo ('funkcja '.'echo '.'dziala '.'prawidlowo <br>');
    $wiadomosc = "funkcja echo dziala prawidlowo <br>";
    echo $wiadomosc;
    $wiadomosc1 = "funkcja echo dziala prawidlowo <br>";
    echo ($wiadomosc1);
#2. 
    print ("Zglasza "."sie funkcja print <br>");
    print "Zglasza "."sie funkcja print <br>";
#3. 
    ?>
    <?= "raz "."dwa <br>"; ?>
    <?= "trzy "."cztery <br>";?>
<?php
#4.
#komentarz jednoliniowy
//drugi komentarz jednoliniowy
/*
komentarz wieloliniowy
*/

?>
</body>
</html>