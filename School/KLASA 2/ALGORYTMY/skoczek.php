<?php
function wyswietl($t, $n) {
    for($w=0; $w<$n; $w++) { //wiersz
        for($k=0; $k<$n; $k++) { //kolumna
            echo $t[$w][$k] . "\t";
        }
        echo "\n";
    }
    echo "\n";
}

function sprawdz($p, $x, $y, $n) {
    return (($x >= 0 && $x < $n) && ($y >= 0 && $y < $n) && $p[$y][$x] == 0 );
}

function skok(&$p, $x, $y, $ruchX, $ruchY, $n, $numerSkoku) {
    $czyKoniec = false;
    $p[$y][$x] = $numerSkoku;

    if($numerSkoku == $n * $n) {
        return true;
    }


    for($r=0; $r<8; $r++) { //ruch
        $tmpX = $x + $ruchX[$r];
        $tmpY = $y + $ruchY[$r];

        if(sprawdz($p, $tmpX, $tmpY, $n)) {
            $czyKoniec = skok($p, $tmpX, $tmpY, $ruchX, $ruchY, $n, $numerSkoku + 1);
            if($czyKoniec) {
                break;
            }
        }
    }

    if($czyKoniec == false) {
        $p[$y][$x] = 0;
        return false;
    }
    else {
        return true;
    }
}

$n=5;
$plansza = [];
$numerSkoku = 1;

$ruchX = [1, 1, -1, -1, 2, 2, -2, -2];
$ruchY = [2, -2, 2, -2, 1, -1, 1, -1];

for($w=0; $w<$n; $w++) { //wiersz
    for($k=0; $k<$n; $k++) { //kolumna
        $plansza[$w][$k] = 0;
    }
}

if(skok($plansza, 0, 0, $ruchX, $ruchY, $n, $numerSkoku))
    wyswietl($plansza, $n);
else {
    echo "Nie da się. \n";
}
