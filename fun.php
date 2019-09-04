<?php


$k = 'KATE';

function Vardas(&$arg, $arg2 = 'default')
{
    global $k, $s;

    if(strlen($arg)> 20) {
        return 'A';
    }

    $arg = '+++'.$arg;

    echo Vardas($arg);

    echo $k . '<br>'; 
    echo $arg . '<br>';
    $s = 'SUO';
    return 'B';
}


$la = 'LA-LA';

$r = Vardas($la);

echo $r . '<br>'; 

echo $k . '<br>'; 

echo $s . '<br>'; 


function suma(...$arg)
{
    _dc($arg);
}


$a = function(){
    return range(1,6);
};


echo suma(1,2,3,5,6,7,$a());
echo suma(1,2);



function an($a)
{
    echo $a('RRRR');
}


an(function($s){return trim('   AA  ').$s;});