<?php

defined('DIR') or die();

// echo '<img src="'.IMG.'1.jpg'.'">';

// _dc(__DIR__);
if(!empty($_POST)) {


_d($_POST);

if (isset($_POST['sum'])) {
  $_SESSION['ats'] = 'Atsakymas: '.((float)$_POST['x'] + (float)$_POST['y']);
  $ats = 'Atsakymas: '.((float)$_POST['x'] + (float)$_POST['y']);
}

if (isset($_POST['skir'])) {
  $_SESSION['ats'] = 'Atsakymas: '.((float)$_POST['x'] - (float)$_POST['y']);
  $ats = 'Atsakymas: '.((float)$_POST['x'] - (float)$_POST['y']);
}

$_SESSION['x'] = (float)$_POST['x'];
$_SESSION['y'] = (float)$_POST['y'];

if (file_exists(DIR.'/svarbu/data.json')) {
  $data = json_decode(file_get_contents(DIR.'/svarbu/data.json'));
}
else {
  $data = [];
}

$data[] = $ats;


file_put_contents(DIR.'/svarbu/data.json', json_encode($data));


header('Location: http://localhost/_36/1/sumatorius.php');
die();  


}