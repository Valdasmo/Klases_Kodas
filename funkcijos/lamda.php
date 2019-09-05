<?php


$a = range(19, 27);

_dc($a);


function plius5($arg)
{
    return $arg + 5;
}


$b = array_map('plius5', $a);



$b = array_map(function($arg)
{
    return $arg + 5;
}, $a);


_dc($b);


function suma($a, $b)
{
    $rand = rand(1,10);
    return $a + $b($rand, $a);
}

$arg1 = 5;
// $b yra rand + $arg1 

_dc(

    suma($arg1, function($arg1, $arg2)
    {
        return $arg1 + $arg2;
    })

);