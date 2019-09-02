
<a href="?q=dramblys">Duok Drambli</a>
<a href="?q=kengura">Duok Kengura</a>


<form action="" method="POST">
  First name:<br>
  <input type="text" name="q">
  <br>
  Last name:<br>
  <input type="text" name="start" value="Mouse">
  <br><br>
  <input type="submit" value="Submit">
</form> 



<?php



$q = $_GET['q'] ?? 'nera karves';
$start = $_GET['start'] ?? 'nera starto';

_dc($_GET);
_dc($_POST);

echo $q;
echo '<br>';
echo $start;
