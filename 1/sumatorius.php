<?php
session_start();



define('DIR', __DIR__);
define('IMG','http://localhost/_36/1/img/');

// _dd(DIR.'/2/kodas.php');

// echo '<img src="'.IMG.'1.jpg'.'">';

include DIR.'/2/kodas.php';

?>

<form action="" method="POST">
  X:<br>
  <input type="text" name="x" value="<?= $_SESSION['x'] ?? '' ?>">
  <br>
  Y:<br>
  <input type="text" name="y" value="<?= $_SESSION['y'] ?? '' ?>">
  <br><br>
  <button type="submit" name="sum" value="1">Sumatorius</button>
  <button type="submit" name="skir" value="1">Skirtumatorius</button>
</form> 


<?php

// if(isset($_SESSION['ats'])) {
//   foreach($_SESSION['ats'] as $key => $val) {
//     echo ($key+1) .'. : ' . $val . '<br>';
//   }
// }

if (file_exists(DIR.'/svarbu/data.json')) {
  foreach(json_decode(file_get_contents(DIR.'/svarbu/data.json')) as $key => $val) {
    echo ($key+1) .'. : ' . $val . '<br>';
  }
}






session_unset();





