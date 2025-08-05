<?php
$c = 0;
function potega($x, $k) 
{
    global $c;

    if($k == 0) {
        return 1;
    }

    if($k % 2 == 0) {
        $w = potega($x, $k / 2);
        $c++;
        return $w * $w;
    }
    else {
        $w = potega($x, ($k - 1) / 2);
        $c++;
        return $x * $w *$w;
    }
}

echo potega(2,10);
echo "\n";
echo $c;