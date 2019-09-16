<?php
class Base 
{
    public function sayHello() 
    {
        echo 'Hello ';
    }
}

trait SayWorld {
    public function sayHello() 
    {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base 
{
    // use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();

$recipes=[
    banana=[banana=>0.7],
    apple_cherry=[apple=>0.5,cherry=>0.2 ],
    kubus=[apricot=>0.2,apple=>0.4,banana=>0.3],
    sun365=[melon=>0.3,mango=>0.1,pineapple=>0.45],
    granini=[pear=>0.7,carrot=>0.15]
    ];
    