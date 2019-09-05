<?php

// Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas
// yra masyvas [user_id => xxx, place_in_row => xxx] user_id atsitiktinis
// unikalus skaičius nuo 1 iki 1000000, place_in_row atsitiktinis
// skaičius nuo 0 iki 100. 



$m = [];
foreach(range(1,30) as $val) {
    $m[$val] = [];
    $m[$val]['user_id'] = rand(1,1000000);
    $m[$val]['place_in_row'] = rand(1,100);
}

usort($m, function($a, $b)
{
    return $a['place_in_row'] <=> $b['place_in_row'];
});

_dc($m);