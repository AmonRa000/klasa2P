<?php
    $liczba1 = 2;
    $liczba2 = 3;
    $znak = "+";
    echo $liczba1.$znak.$liczba2."=";
    switch($znak) {
        case "+":
            echo $liczba1 + $liczba2;
            break;
        case "-":
            echo $liczba1 - $liczba2;
            break;
        case "*":
            echo $liczba1 * $liczba2;
            break;
        case "/":
            echo $liczba1 / $liczba2;
            break;
    }
?>