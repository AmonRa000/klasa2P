<?php
    $krawedzie = [];
    $krawedzie[1] = [2];
    $krawedzie[2] = [3,4];
    $krawedzie[3] = [5];
    $krawedzie[4] = [5,6];
    $krawedzie[5] = [7];
    $krawedzie[6] = [7];
    $krawedzie[7] = [];
    $odwiedzone=[];
        $wezel=5;
        echo "z wez"
    function sciezki($w,$krawedzie){
        echo $w;
        $odwiedzone[$w]=True;
        foreach($krawedzie[$w] as $index=>$element){
            if(!$odwiedzone[$element]){
                sciezki($element,$krawedzie,$odwiedzone);
            }
        }

    }
?>