<?php
$dane = [2,3,5,7,8];

echo implode(" ", $dane);
echo "\n";

$szukana = readline();

$l=0;
$p=count($dane)-1;

$czyJest = false;
while($l <= $p) {
    $s=(int)(($l+$p)/2);
    if($dane[$s] > $szukana) {
        $p = $s-1;
    }
    else if($dane[$s] < $szukana) {
        $l = $s+1;
    }
    else {
        $czyJest=true;
        break;
    }
}

if($czyJest) {
    echo "JEST\n";
}
else {
    echo "NIE MA\n";
}