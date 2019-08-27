<?php

$i = 0;
while (true) {

    $i++;

    if ($i%2 == 0) {
        continue;
    }

    echo "$i <br>";

    if ($i>= 10) {
        break;
    }

}