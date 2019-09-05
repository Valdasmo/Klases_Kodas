<?php



function A()
{
    static $b = 0;

    return $b++;
}

function B()
{
    $b = 0;

    return $b++;
}


echo A(). '<br>';
echo A(). '<br>';
echo A(). '<br>';
echo A(). '<br>';
echo A(). '<br>';

echo B(). '<br>';
echo B(). '<br>';
echo B(). '<br>';
echo B(). '<br>';
echo B(). '<br>';