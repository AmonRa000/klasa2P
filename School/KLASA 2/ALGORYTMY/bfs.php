<?php

$graf[1] = [2,3];
$graf[2] = [1];
$graf[3] = [1,4,5];
$graf[4] = [3];
$graf[5] = [3];
$graf[6] = [7,8];
$graf[7] = [6,8];
$graf[8] = [6,7];

$odwiedzone = [];
$kolejka = [];

//start
$kolejka[]=6;

while(!empty($kolejka)) {
    $wezel = array_shift($kolejka);
    
    $odwiedzone[$wezel] = true;
    foreach($graf[$wezel] as $element) {
        $czyOdwiedzony = $odwiedzone[$element] ?? false;
        if(!$czyOdwiedzony)
            $kolejka[] = $element;
    }
}

print_r($odwiedzone);


