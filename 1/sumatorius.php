

<form action="" method="POST">
  X:<br>
  <input type="text" name="x">
  <br>
  Y:<br>
  <input type="text" name="y">
  <br><br>
  <input type="submit" value="Submit">
</form> 

<?php

if(!empty($_POST)) {
    
    echo 'Atsakymas: '.((float)$_POST['x'] + (float)$_POST['y']);
}

