<?php

class NaminisGyvunelis
{
    protected $balsas;
    protected $maistas;
    protected $sotus = false;

    public function balsas()
    {
        echo '<br>';
        echo '<span style="color:orange;">'. $this->balsas . '</span>';
        echo '<br>';
    }

    public function maitinimas($edalas)
    {
        if ($edalas != $this->maistas) {
            echo '<br>'.$edalas.' NEEDA!<br>';
        }
        else {
            $this->sotus = true;
        }
    }

    public function arSotus()
    {
        if ($this->sotus) {
            echo '<br>Labai Sotus<br>';
        }
        else {
            echo '<br>Alkanas<br>';
        }
    }

}

class Kate extends NaminisGyvunelis
{
    protected $balsas = 'Miau miau miau';
    protected $maistas = 'zuvis';
}
class Suo extends NaminisGyvunelis 
{
    protected $balsas = 'Au Au Au Au';
    protected $maistas = 'kaulas';
}
class Ziurkenas extends NaminisGyvunelis 
{
    protected $balsas = 'Ziur ziur';
    protected $maistas = 'morka';
}

class Papuga extends NaminisGyvunelis 
{
    protected $balsas = 'Sneka';
    protected $maistas = 'kruopos';
}

//KODAS

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