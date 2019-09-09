<?php

// include __DIR__. '/NaminisGyvunelis.php';
// include __DIR__. '/Kate.php';
// include __DIR__. '/Suo.php';
// include __DIR__. '/Ziurkenas.php';
// include __DIR__. '/Papuga.php';



spl_autoload_register(function ($class) {


    // project-specific namespace prefix
    $prefix = '';

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


$g1 = new Kate;
$g2 = new Suo;
$g3 = new Ziurkenas;


$g1->balsas();
$g2->balsas();
$g3->balsas();

$g1->maitinimas('kaulas');
$g1->arSotus();
$g1->maitinimas('zuvis');
$g1->arSotus();


$g4 = new Papuga;
$g4->balsas();
$g4->maitinimas('kaulas');
$g4->arSotus();
$g4->maitinimas('zuvis');
$g4->arSotus();