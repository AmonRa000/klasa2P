<?php

$x = 3;

$a = 1;
$b = $x / $a;
$eps = 0.001;
$s = ($a + $b) / 2;

while(abs($a - $b) > $eps) {
    $s = ($a + $b) / 2;
    $a = $s;
    $b = $x / $a;
}

echo round($s, 3);