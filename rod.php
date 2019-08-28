<?php

$m = ['Viens', 'Du', 'Trys', 'Keturi'];



foreach($m as &$val) {}

unset($val);




foreach($m as $val) {
    echo '<br>';
    echo "$val";
}