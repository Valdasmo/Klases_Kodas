<?php
namespace Paroda\BriedzioKrautuve;

use Paroda\BriedzioKrautuve\NaminioGyvunelioInterfeisas;

abstract class NaminisGyvunelis implements NaminioGyvunelioInterfeisas
{
    protected $balsas;
    protected $maistas;
    protected $sotus = false;

    public static $seimininkas;

    public static function KitasSeimininkasStatinis($vardas)
    {
        self::$seimininkas = $vardas;
    }


    public function __construct($gyvunelis = 'neaiskus')
    {
        echo "<br>CONSTRUKTORIUS: $gyvunelis<br>";
    }

    abstract public function svoris();

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

    public function seimininkas()
    {
        echo '<br>'.self::$seimininkas.'<br>';
    }

    public function KitasSeimininkas($vardas)
    {
        self::$seimininkas = $vardas;
    }

}