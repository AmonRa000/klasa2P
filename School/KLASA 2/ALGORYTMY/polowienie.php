<?php
    function f($x) {
        return $x - 4;
    }
    $min = PHP_INT_MIN;
    $max = PHP_INT_MAX;
    $E = 0.000001;
    $s = 0;
    while ($max-$min>$E) {
        $s = ($min+$max)/2;
        $wynik = f($s);
        if($wynik>0) {
            $max = $s;
        } else if ($wynik<0) {
            $min = $s;
        }
    }
    print(number_format($s, 3, ","," "));
?>