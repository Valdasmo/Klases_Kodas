<?php

defined('DIR') or die();

_dc(__DIR__);
if(!empty($_POST)) {


_d($_POST);

if (isset($_POST['sum'])) {
  $_SESSION['ats'] = 'Atsakymas: '.((float)$_POST['x'] + (float)$_POST['y']);
}

if (isset($_POST['skir'])) {
  $_SESSION['ats'] = 'Atsakymas: '.((float)$_POST['x'] - (float)$_POST['y']);
}

$_SESSION['x'] = (float)$_POST['x'];
$_SESSION['y'] = (float)$_POST['y'];

header('Location: http://localhost/_36/1/sumatorius.php');
die();  


}