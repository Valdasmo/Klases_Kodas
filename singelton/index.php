<?php

class Grybas 
{
    private $color;
    private static $obj;

    private function __construct(){}

    private function __clone(){}

    private function __sleep(){}


    public static function create()
    {
        return self::$obj ?? self::$obj = new self;
    }
    

    public function color($color)
    {
        $this->color = $color;
    }

    public function get_color()
    {
        return $this->color;
    }

}

$grybas = Grybas::create();
$grybas->color('Blue');

// $grybas1 = clone($grybas);
// $grybas1->color('Red');

// $grybas2 = unserialize(serialize($grybas));
// $grybas2->color('Green');

var_dump($grybas);
// var_dump($grybas1);
// var_dump($grybas2);



