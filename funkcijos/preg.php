<?php


$a ='skjdfh97dsfkjsdhfds8fyu100sdfbsuifysd98fsdb';

$b = preg_replace_callback('/(\d)(\d)/', function($arg)
{

    _dc($arg);
    // $skaicius = $arg[0];

    $pakeistas = $arg[2].$arg[1];

    // do{
    //     $pakeistas = rand(0,9);
    // } while($skaicius == $pakeistas);

    return $pakeistas;


}, $a);

_dc($a);
_dc($b);