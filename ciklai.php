<?php

$i = 0;
while (true) {

    $i++;

    if ($i%2 == 0) {
        continue;
    }

    echo "$i <br>";

    if ($i>= 10) {
        break;
    }

}


foreach(range(0,399) as $i){

    if($i%50 == 0) {
        echo '<br>';
    }

    echo '*';


}
echo '<br>';echo '<br>';echo '<br>';

foreach(range(0,7) as $i){

    // foreach(range(0,49) as $i2){
    //     echo '*';
    // }

    echo str_repeat('*', 50);

    echo '<br>';
}