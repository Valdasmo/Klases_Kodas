<?php
session_start();



define('DIR', __DIR__);




include __DIR__.'/kodas.php';

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

echo $_SESSION['ats'] ?? '';
 session_unset();





