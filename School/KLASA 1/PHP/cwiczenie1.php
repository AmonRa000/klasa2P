<?php
    $wartosc = 0;
    $ilosc = 0;
    for($i=30;$i<=70;$i+=2) {
        $wartosc+= $i;
        $ilosc++;
    }
    echo "suma=".$wartosc."<br>";
    echo "srednia=".$wartosc/$ilosc;
?>