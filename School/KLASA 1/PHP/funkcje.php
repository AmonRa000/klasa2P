<?php
    function suma(){
        $a=2;
        $b=3;
        echo "dodawanie = ".$a+$b."<br>";
    }
    function odejmowanie(){
        $a=2;
        $b=3;
        echo "odejmowanie = ".$a-$b."<br>";
    }
    function mnozenie(){
        $a=2;
        $b=3;
        echo "mnozenie = ".$a*$b."<br>";
    }
    function dzielnie(){
        $a=2;
        $b=3;
        echo "dzielnie = ".$a/$b."<br>";
    }
    function potegowanie(){
        $a=2;
        $b=3;
        echo ("potegowanie = ".pow($a,$b)."<br>");
    }
    function pierwiastkowanie(){
        $a=2;
        $b=3;
        echo ("pierwiastkowanie = ".sqrt($a)."<br>");
    }
    function modulo(){
        $a=2;
        $b=3;
        echo "modulo = ".$a%$b."<br>";
    }
    echo suma();
    echo odejmowanie();
    echo mnozenie();
    echo dzielnie();
    echo potegowanie();
    echo pierwiastkowanie();
    echo modulo();
?>