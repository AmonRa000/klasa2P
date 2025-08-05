<?php

function rekurencja($i) {
    echo "rek start $i\n";
    if($i < 5) {
        $i++;
        rekurencja($i);
    }
    echo "rek stop $i\n";
}

echo "Start\n";

rekurencja(0);

echo "Koniec\n";