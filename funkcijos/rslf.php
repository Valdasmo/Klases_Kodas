<?php

$T = function() use(&$T)
{
    static $i = 0;
    $i++;
    echo "Iejom i = $i <br>";
    if ($i > 10) {
        return false;
    }
    $T(); 
    echo "ainam lauk i = $i <br>";

};

$T();