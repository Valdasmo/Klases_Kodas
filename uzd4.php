<?php

$m2 = $m1 = [];

foreach(range(0, 99) as $val) {

    foreach(range(1, 2) as $m) {
        do {
            $reiksme = rand(100, 999);
        }
        while(in_array($reiksme, ${'m'.$m}));
        ${'m'.$m}[] = $reiksme;
    }

}


$m3 = [];
foreach(range(0, 9) as $val) {
    $m3[$val] = [];
    foreach(range(0, 4) as $val1) {
        $m3[$val][$val1] = rand(5,25);
    }

}



_d($m3);

foreach(range(0, 4) as $val1) {

    $suma = 0;
    
    foreach($m3 as $val) {

        $suma = $suma + $val[$val1];

    }

    echo $suma.'<br>';

}