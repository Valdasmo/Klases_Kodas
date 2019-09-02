
<form action="" method="POST">
<div style="display:flex;">
<img src="img/1.jpg" style="width:300px;height:auto;display:inline-block;margin:30px;">
<div style="display:flex; flex-direction:column;margin:30px;">
<label><input type="radio" value="laivas" name="_1">Laivas</label>
<label><input type="radio" value="namas" name="_1">Nmas</label>
<label><input type="radio" value="lektuvas" name="_1">Lektuvas</label>
<label><input type="radio" value="autobusas" name="_1">Autobusas</label>
</div>
</div>


<div style="display:flex;">
<img src="img/2.jpg" style="width:300px;height:auto;display:inline-block;margin:30px;">
<div style="display:flex; flex-direction:column;margin:30px;">
<label><input type="radio" value="laivas" name="_2">Laivas</label>
<label><input type="radio" value="namas" name="_2">Nmas</label>
<label><input type="radio" value="lektuvas" name="_2">Lektuvas</label>
<label><input type="radio" value="autobusas" name="_2">Autobusas</label>
</div>
</div>

<div style="display:flex;">
<img src="img/3.jpg" style="width:300px;height:auto;display:inline-block;margin:30px;">
<div style="display:flex; flex-direction:column;margin:30px;">
<label><input type="radio" value="laivas" name="_3">Laivas</label>
<label><input type="radio" value="namas" name="_3">Nmas</label>
<label><input type="radio" value="lektuvas" name="_3">Lektuvas</label>
<label><input type="radio" value="autobusas" name="_3">Autobusas</label>
</div>
</div>

<button type="submit">SPEK!</button>
</form>
<?php

$atsakymai = ['_1'=>'lektuvas','_2'=>'namas','_3'=>'laivas'];

if(!empty($_POST)) {
    $teisingi = 0;
    foreach($_POST as $key => $val) {
        if($val == $atsakymai[$key]) {
            $teisingi++; 
        }
    }
    echo "ATSAKYMAS: $teisingi atsakymai t.y ";
    echo round(100/3*$teisingi,2).'%';
}
