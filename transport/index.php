<?php
class Gnoms
{
    private static $count;

    public static function set_gnoms($count)
    {
        self::$count = $count;
    }

    public static function get_gnoms()
    {
        return self::$count;
    }

    public static function gnoms_in_transport($count)
    {
        self::$count -= $count;
    }


}


abstract class Transport 
{
    protected $passangers = 0;


    abstract protected function get_max();


    public function get_in($count)
    {
        $before = $this->passangers;
        $this->passangers += $count;
        $this->passangers = min($this->passangers, $this->get_max());
        return $this->passangers - $before;
    }

    public function get_out($count) 
    {
        $this->passangers -= $count;
        $this->passangers = max($this->passangers, 0);
        return $this->passangers;
    }


}

class Car extends Transport
{
    const MAX = 4;

    protected function get_max()
    {
        return self::MAX;
    }
}

class Bus extends Transport
{
    const MAX = 45;

    protected function get_max()
    {
        return self::MAX;
    }
}

Gnoms::set_gnoms(100);

$car1 = new Bus;
$car2 = new Car;

$car3 = new Bus;



Gnoms::gnoms_in_transport($car1->get_in(100));
Gnoms::gnoms_in_transport($car3->get_in(55));
Gnoms::gnoms_in_transport($car2->get_in(55));



_dc(Gnoms::get_gnoms());

