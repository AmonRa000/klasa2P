<?php

function dfs($w) {
    global $graf;
    global $odwiedzone;

    $odwiedzone[$w] = true;

    foreach($graf[$w] as $element) {
        $czyOdwiedzony = $odwiedzone[$element] ?? false;
        if(!$czyOdwiedzony)
            dfs($element);
    }
}

$graf[1] = [2,3];
$graf[2] = [1];
$graf[3] = [1,4,5];
$graf[4] = [3];
$graf[5] = [3];
$graf[6] = [7,8];
$graf[7] = [6,8];
$graf[8] = [6,7];

$odwiedzone = [];


//start
dfs(6);

print_r($odwiedzone);


