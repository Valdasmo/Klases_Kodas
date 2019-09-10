<?php

// include __DIR__. '/NaminisGyvunelis.php';
// include __DIR__. '/Kate.php';
// include __DIR__. '/Suo.php';
// include __DIR__. '/Ziurkenas.php';
// include __DIR__. '/Papuga.php';

use Paroda\Kate;
use Paroda\Suo;
use Paroda\BriedzioKrautuve\NaminisGyvunelis;
use Paroda\BriedzioKrautuve\NaminioGyvunelioInterfeisas;

spl_autoload_register(function ($class) {


    // project-specific namespace prefix
    $prefix = 'Paroda';

    // base directory for the namespace prefix
    $base_dir = __DIR__ . '/src-class/';

    // does the class use the namespace prefix?
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // no, move to the next registered autoloader
        return;
    }

    // get the relative class name
    $relative_class = substr($class, $len);

    // replace the namespace prefix with the base directory, replace namespace
    // separators with directory separators in the relative class name, append
    // with .php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // if the file exists, require it


    if (file_exists($file)) {
        require $file;
    }
});

NaminisGyvunelis::$seimininkas = 'Simona';

NaminisGyvunelis::KitasSeimininkasStatinis('Liudas');

echo NaminisGyvunelis::AKIU_SKAICIUS;


$g1 = new Kate('Bus Kate');
$g2 = new Suo;
$g3 = new Paroda\Ziurkenas;


$g1->balsas();
// $g1->KitasSeimininkas('Antanas');
$g2->balsas();
$g2->seimininkas();
$g3->balsas();

$g1->maitinimas('kaulas');
$g1->arSotus();
$g1->maitinimas('zuvis');
$g1->arSotus();


$g4 = new Paroda\Papuga;
$g4->balsas();
$g4->maitinimas('kaulas');
$g4->arSotus();
$g4->maitinimas('zuvis');
$g4->arSotus();

$g5 = [];


function GyvunelioPasverimas(NaminioGyvunelioInterfeisas $gyvunelis)
{
    echo '<br>'.$gyvunelis->svoris().'<br>';
}


GyvunelioPasverimas($g5);