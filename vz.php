<?php

$vz = file_get_contents('http://www.vz.lt/');

$vz = str_replace('tampa platforma', 'LA-LA-LA', $vz);

echo $vz;


