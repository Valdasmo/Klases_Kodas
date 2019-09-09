<?php

class Briedis
{
    public $vardas;
    protected $ragai = 'Dideli';
    private $sienas = 'Daug';


    public function getRagai()
    {
        return $this->ragai;
    }

    public function setRagai($ragai)
    {
        if ($ragai == 'mazi') {
            return;
        }
        $this->ragai = $ragai;
    }
}

class Zuikis extends Briedis
{
    protected $ragai;
    private $ausys = 'Didokos';

    public function setRagai($ragai)
    {
        return;
    }

    public function getSienas()
    {
        return $this->sienas;
    }

}




$zveris1 = new Briedis;
$zveris2 = new Briedis;
$zveris3 = new Zuikis;

$zveris1->vardas = 'Bulkius';

$zveris1->setRagai('mazi');
$zveris3->setRagai('Labai ragai');
$zveris3->vardas = 'Puikis';

var_dump(
    $zveris3->getSienas()
);
echo '<br>';

var_dump(
    $zveris1->getRagai()
);
echo '<br>';

$zveris2->vardas = 'Bandelius';

var_dump($zveris1);
echo '<br>';
var_dump($zveris2);
echo '<br>';
var_dump($zveris3);
echo '<br>';
var_dump($zveris1 == $zveris3);
echo '<br>';
var_dump($zveris1 == $zveris2);
