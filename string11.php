<?php

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$sourceString = 'Don\'t Be a Menace to South Central While Drinking Your Juice in the Hood Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';
// echo $sourceString . '<br/>';



$z= 0;
$news = '';
while($z < 100000){
    $news .= ' '.$z;
    $z++;
}



$time_start = microtime_float();
$iii = 0;

while($iii < 100){

$c = implode(" ", array_rand(array_flip(explode(" ", $news)), 10));

$iii++;
}
$time_end = microtime_float();
echo $time_end - $time_start;

echo '<br>';echo '<br>';


/*
Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, 
o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. (reikės masyvo)
 */
$string1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$string2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$time_start = microtime_float();
$iii = 0;

while($iii < 100){

// $stringArray = explode(' ',str_replace(',', '', $string1));
// $string2Array = explode(' ',str_replace(',', '', $string2));


// foreach($string2Array as $word)
//     array_push($stringArray,$word);
// // print_r($stringArray);

$stringArray = explode(" ", $news);


$array = [];
    for($i = 0; $i < 10; $i++){
        array_push($array,$stringArray[rand(0,(count($stringArray)-1))]);
    }
// print_r($array);
$v = implode(' ',$array);
$iii++;
}

$time_end = microtime_float();
echo $time_end - $time_start;