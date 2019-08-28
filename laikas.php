<?php

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$ilgis = 400000;
$kartojimai = 50;

$time_start = microtime_float();
$iii = 0;
while($iii < $kartojimai){

foreach(range(0,$ilgis) as $val){}

$iii++;
}
$time_end = microtime_float();
echo $time_end - $time_start;
echo '<br>';echo 'FOREACH<br>';echo '<br>';echo '<br>';


$time_start = microtime_float();
$iii = 0;
while($iii < $kartojimai){

for($i=0;$i<=$ilgis;$i++){}

$iii++;
}
$time_end = microtime_float();
echo $time_end - $time_start;
echo '<br>';echo 'FOR<br>';echo '<br>';echo '<br>';


$time_start = microtime_float();
$iii = 0;
while($iii < $kartojimai){
$i=0;
while($i<=$ilgis){$i++;}

$iii++;
}
$time_end = microtime_float();
echo $time_end - $time_start;
echo '<br>';echo 'WHILE<br>';echo '<br>';echo '<br>';