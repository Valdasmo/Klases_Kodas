<?php

$a = rand(0,2);
$b = rand(0,2);
$c = rand(0,2);
$d = rand(0,2);

echo "$a - $b - $c - $d";
echo '<br>';
$string = $a.$b.$c.$d;

$nuliai = $vienetai = $dvejetai = 0;

//nelabai geras
$nuliai = substr_count($string, '0');
$vienetai = substr_count($string, '1');
$dvejetai = substr_count($string, '2');


echo 'Nuliai: '.$nuliai;
echo '<br>';
echo 'Vienetai: '.$vienetai;
echo '<br>';
echo 'Dvejetai: '.$dvejetai;
echo '<br>';

$nuliai = $vienetai = $dvejetai = 0;

//geras
if($a == 2) {
    $dvejetai++;
}
if($b == 2) {
    $dvejetai++;
}
if($c == 2) {
    $dvejetai++;
}
if($d == 2) {
    $dvejetai++;
}

$suma = $a+$b+$c+$d;

$vienetai = $suma - ($dvejetai * 2);
$nuliai = 4 - $vienetai - $dvejetai;

echo 'Nuliai: '.$nuliai;
echo '<br>';
echo 'Vienetai: '.$vienetai;
echo '<br>';
echo 'Dvejetai: '.$dvejetai;
echo '<br>';


/*Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo 1000 iki 9999.
Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki mažiausios, atskirtas tarpais.
Naudoti ciklų ir masyvų NEGALIMA. */
$n1 = rand(9999,9999);
$n2 = rand(9999,9999);
$n3 = rand(9999,9999);
$n4 = rand(9999,9999);
$n5 = rand(9999,9999);
$n6 = rand(9999,9999);
echo $n1.', '.$n2.', '.$n3.', '.$n4.', '.$n5.', '.$n6;
echo '<br>';
function countBigers ($lyginamasis,$kiti2,$kiti3,$kiti4,$kiti5,$kiti6){
   $count = 0;
   if($lyginamasis >$kiti2){
       $count++;
   }
   if($lyginamasis >$kiti3){
       $count++;
   }
   if($lyginamasis >$kiti4){
       $count++;
   }
   if($lyginamasis >$kiti5){
       $count++;
   }
   if($lyginamasis >$kiti6){
       $count++;
   }
   return $count;
}
function fill ($eilesNumeris, $n1,$n2,$n3,$n4,$n5,$n6){
   $count1 = countBigers ($n1,$n2,$n3,$n4,$n5,$n6);
   $count2 = countBigers ($n2,$n1,$n3,$n4,$n5,$n6);
   $count3 = countBigers ($n3,$n1,$n2,$n4,$n5,$n6);
   $count4 = countBigers ($n4,$n1,$n2,$n3,$n5,$n6);
   $count5 = countBigers ($n5,$n1,$n2,$n3,$n4,$n6);
   $count6 = countBigers ($n6,$n1,$n2,$n3,$n4,$n5);
   if($count1 == $eilesNumeris){
       $box = $n1;
   }
       elseif($count2 == $eilesNumeris){
           $box = $n2;
       }
           elseif($count3 == $eilesNumeris){
               $box = $n3;
           }
               elseif($count4 == $eilesNumeris){
                   $box = $n4;
               }
                   elseif($count5 == $eilesNumeris){
                       $box = $n5;
                   }
                       elseif($count6 == $eilesNumeris){
                           $box = $n6;
                       }
   return $box;
}
$box1 = fill(0, $n1,$n2,$n3,$n4,$n5,$n6);
$box2 = fill(1, $n1,$n2,$n3,$n4,$n5,$n6);
$box3 = fill(2, $n1,$n2,$n3,$n4,$n5,$n6);
$box4 = fill(3, $n1,$n2,$n3,$n4,$n5,$n6);
$box5 = fill(4, $n1,$n2,$n3,$n4,$n5,$n6);
$box6 = fill(5, $n1,$n2,$n3,$n4,$n5,$n6);
echo '<br>'.$box1.',  '.$box2.',  '.$box3.',  '.$box4.',  '.$box5.',  '.$box6;


echo '<br>';
echo '<br>';
$n1 = rand(9999,9999).'a';
$n2 = rand(9999,9999).'b';
$n3 = rand(9999,9999).'c';
$n4 = rand(9999,9999).'d';
$n5 = rand(9999,9999).'e';
$n6 = rand(9999,9999).'f';

echo $n1.', '.$n2.', '.$n3.', '.$n4.', '.$n5.', '.$n6;
echo '<br>';

${'_'.$n1} = 'n1';
${'_'.$n2} = 'n2';
${'_'.$n3} = 'n3';
${'_'.$n4} = 'n4';
${'_'.$n5} = 'n5';
${'_'.$n6} = 'n6';

$atsakymas = '';

$max = max($n1, $n2, $n3, $n4, $n5, $n6);
$atsakymas .= ' '.(int)$max;
$${'_'.$max} = 0;

$max = max($n1, $n2, $n3, $n4, $n5, $n6);
$atsakymas .= ' '.(int)$max;
$${'_'.$max} = 0;

$max = max($n1, $n2, $n3, $n4, $n5, $n6);
$atsakymas .= ' '.(int)$max;
$${'_'.$max} = 0;

$max = max($n1, $n2, $n3, $n4, $n5, $n6);
$atsakymas .= ' '.(int)$max;
$${'_'.$max} = 0;

$max = max($n1, $n2, $n3, $n4, $n5, $n6);
$atsakymas .= ' '.(int)$max;
$${'_'.$max} = 0;

$max = max($n1, $n2, $n3, $n4, $n5, $n6);
$atsakymas .= ' '.(int)$max;
$${'_'.$max} = 0;

echo $atsakymas;

