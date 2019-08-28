<?php

function fibonacci() {

    for($i=1; $i<10; $i++) {
        yield $i;

    }
}






$fibo = fibonacci();
foreach ($fibo as $value) {
    echo "$value\n";
}

foreach(range(1,10) as $val){}