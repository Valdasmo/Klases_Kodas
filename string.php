<?php

echo strlen('Labas');
echo '<br>';
echo mb_strlen('你好');
echo '<br>';


echo str_replace('-', '+', 'La-bas-Abas');
echo '<br>';

echo str_replace(['-','_'], '+', 'La_bas-Abas');
echo '<br>';

echo str_replace([' ','_'], ['+', '*'], 'La_bas Abas');
echo '<br>';

$labas = 'Labas';

echo $labas{2}.$labas{4};
echo '<br>';echo '<br>';echo '<br>';echo '<br>';

echo substr('abcdef', -3);
echo '<br>';
echo substr("abcdef", 0, -2);
echo '<br>';
echo substr("abcdef", 2, -1);
echo '<br>';
echo substr("abcdef", 4, -4);
echo '<br>';
echo substr("abcdef", 2, 6);
echo '<br>';


echo preg_replace('/^\-/', '+', '-La-bas-Abas');
echo '<br>';

