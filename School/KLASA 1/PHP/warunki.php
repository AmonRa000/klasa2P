<?php
    $a = 6;
    $b = 5;
    if ($a == 3){
        echo "liczba pawidlowa";
    }else{
        echo "liczba nie jest prawidlowa";
    }
    echo "<br>";
    if($a>$b){
        echo $a." jest wieksze od ".$b;
    }else{
        echo $a." jest mniejsze od ".$b;
    }
    echo "<br>";
    echo "<br>";
    $liczba = 3;
    if($liczba%2==0){
        echo $liczba." jest liczba parzysta";
    }else{
        echo $liczba." nie jest liczba parzysta"; 
    }

?>