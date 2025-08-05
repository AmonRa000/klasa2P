<?php
    $zmienna = 5;
    echo "Stan początkowy: ".$zmienna++."<br>";
    echo "Stan po inkermentacji: ".$zmienna."<br>";
    echo "Stan początkowy: ".$zmienna--."<br>";
    echo "Stan po dekermentacji: ".$zmienna."<br>";
    function suma() {
        $a=2;
        $b=3;
        $wynik=$a+$b;
        $wynik++;
        echo "wynik = ".$wynik."<br>";
    }
    echo suma();
?>