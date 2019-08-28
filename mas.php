<?php

$masyvas = ['mano knygos', 'zurnalai' => 'seni žurnalai', 'zaislai' => 'katės žaislai'];


foreach($masyvas as $key => $val) {
    echo '<br>';
    $masyvas[$key] = 'bla bla';
}


foreach($masyvas as $val) {
    echo '<br>';
    echo $val;
}

echo '<br>';echo '<br>';

foreach($masyvas as $key => $val) {
    echo '<br>';
    echo "$key - $val";
}