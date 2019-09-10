<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
<title>CAPTCHA</title>
<style>
.input{position:relative;}.input input{position:absolute;left:7px;bottom:7px;}img{width:200px;height:auto;}form{width: 650px;margin-top: 50px;}.button{margin-top: 40px;}
</style>
</head>
<body>
<?php

$_cats = [
'abyssinian-464654.jpg',
'beaphar-wormclear-2-tablets.jpg',
'c546546-photo.jpg',
'dbe5f0727b69487016ffd67a6689e75a_400x400.jpg',
'download.jpg',
'feline_redirected_aggression_4646_behavior.jpg',
'ragdoll-dhsfklfh.jpg',
'sq_md_174-Caden-17.jpg',
'sq_md_177-Caleb-177-Caleb.jpg',
'sq_md_33-Barcla-33-Barcla-108.jpg'
];

$_dogs = [
'_angel_dreamstime_xs_273.jpg',
'000005592502_therapy_body.jpg',
'012w-400x400.jpg',
'400sdhfuisdhleash-SI.jpg',
'51Hpo1WuIxL._AC_SY400_.jpg',
'73584_pla_pf_juniorsmall_1_4kg_0.jpg',
'asha.jpg',
'cover-stop-from-gobbling-thumb.jpg',
'download4lj654l65.jpg',
'mazzy-4.jpg'
];

$secret = $control = 1;

// generavimo pradžia
$target = (rand(0, 1)) ? '_cats' : '_dogs'; 
shuffle($_cats);
shuffle($_dogs);

//palyginimo paveiksliuko išvedimas
// <?=   lygus <?php echo

?>
<div class="target"><img src="ci/<?= array_shift($$target) ?>"></div>
<h3>Pažymėkite visus panašius paveiksliukus</h3>
<form action="" method="POST">
<?php

//9 paveiksliukų išvedimas
for ($i=0; $i<9; $i++) {
    $random = (rand(0, 1)) ? '_cats' : '_dogs';
    $random_control = (rand(10000000, 99999999));
    if ($target == $random) {
        $control = $control + $random_control;
    }
    ?>
    <label class="input"><img src="ci/<?= array_shift($$random) ?>"><input type="checkbox" name="images[]" value="<?= $random_control ?>"></label>
    <?php
}

//kontrolės, valdymo ir pabaigos išvedimas 
?>
<input type="hidden" name="control" value="<?= $control ?>">
<input class="button" name="button" type="submit" value="Gerai">
</form>
<?php
//tikrinimas


if (isset($_POST['button'])) {
    //dd($_POST);
    if(isset($_POST['images']) && (array_sum($_POST['images']) + $secret) == $_POST['control']) {
        echo '<h1 style="color:green;">Esi žmogus</h1>';
    }
    else {
        echo '<h1 style="color:red;">Esi robotas</h1>';
        echo '<iframe width="56" height="31" src="https://www.youtube.com/embed/sWMDV-cveUA?start=28&autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
    }
}
?>
</body>
</html>