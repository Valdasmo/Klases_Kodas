<?php

interface Bird
{
    function getName();
}

interface Fly
{
    function canFly();
}

interface Swim
{
    function canSwim();
}



class penguin implements Bird, Swim
{
    public function getName() 
    {
        echo '<br>As pingvinas<br>';
    }
    public function canSwim() 
    {
        echo '<br>As moku plaukti<br>';
    }
}

class Duck implements Bird, Swim, Fly
{
    public function getName() 
    {
        echo '<br>As Antukas<br>';
    }
    public function canSwim() 
    {
        echo '<br>As moku plaukti<br>';
    }
    public function canFly() 
    {
        echo '<br>I can Fly<br>';
    }
}

class hedgehog
{
    public function hello()
    {
        echo '<br>Ežys ir jokių nesąmonių<br>';
    }
}

$a = [];
$a[] = new hedgehog;
$a[] = new Duck;
$a[] = new penguin;
$a[] = new hedgehog;
$a[] = new Duck;
$a[] = new penguin;




foreach ($a as $object) {

    if ($object instanceof Bird) {
        $object->getName();
        if ($object instanceof Fly) {
            $object->canFly();
        }
        if ($object instanceof Swim) {
            $object->canSwim();
        }
    }
    else {
        echo '<br>Ne paukštis. Gal ežiukas?<br>';
    }


}


