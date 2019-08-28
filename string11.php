<?php

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$ilgis = 2000;
$kartojimai = 10000;
$elementai = 1000;
$z= 0;
$news = '';
while($z < $ilgis){
    $news .= ' '.$z;
    $z++;
}

$mm = explode(" ", $news);

//PIRMAS
$time_start = microtime_float();
$iii = 0;

while($iii < $kartojimai){
    $c = implode(" ", array_rand(array_flip($mm), $elementai));
    $iii++;
}
$time_end = microtime_float();
echo $time_end - $time_start;
echo '<br>';echo '<br>';


$time_start = microtime_float();
$iii = 0;

while($iii < $kartojimai){
    $stringArray = $mm;
    $array = [];
        for($i = 0; $i < $elementai; $i++){
            array_push($array,$stringArray[rand(0,(count($stringArray)-1))]);
        }
    $v = implode(' ',$array);
    $iii++;
}

$time_end = microtime_float();
echo $time_end - $time_start;


echo '<br>';echo '<br>';


$time_start = microtime_float();
$iii = 0;

while($iii < $kartojimai){

    $masyvas = $mm;

    $masyvo_ilgis = count($masyvas);

    $panaudoti_indeksai = [];

    $rezultatas = [];

    while(count($panaudoti_indeksai) <= $elementai) {

        while(true) {
            $indeksas = rand(0, $masyvo_ilgis-1);
            if(!in_array($indeksas, $panaudoti_indeksai)) {
                break;
            }
        }

        $panaudoti_indeksai[] = $indeksas;
        
        $rezultatas[] = $masyvas[$indeksas];

    }
    $v = implode(' ',$rezultatas);

    // echo $v;

    $iii++;
}

$time_end = microtime_float();
echo $time_end - $time_start;