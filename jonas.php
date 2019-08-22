<?php

$jonas = rand(5, 25);

$petras = rand(10, 20);

echo "Jonas: $jonas Petras: $petras";
echo '<br>';

if ($jonas > $petras) {
    echo 'Laimejo Jonas';
}
elseif ($jonas == $petras) {
    echo 'Niekas nelaimejo';
}
else {
    echo 'Laimejo Petras';
}

echo '<br>';

$rezultatas = (false || false) ? 'B' : 'C' ;

echo '<br>';

echo $rezultatas;

$rezultatas = (false) ? 'A' :  (false) ? 'B' : (true) ? 'C' : 'D';
// $rezultatas = (false||false||false) ? 'C' : 'D';
echo '<br>';
echo $rezultatas;

echo '<br>';

echo number_format(0.9954444444, 2, '.', '');