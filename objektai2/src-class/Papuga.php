<?php
namespace Paroda;

use Paroda\BriedzioKrautuve\NaminisGyvunelis;

class Papuga extends NaminisGyvunelis 
{
    protected $balsas = 'Sneka';
    protected $maistas = 'kruopos';

    public function __construct()
    {
        parent::__construct('PAPUGA');

        echo "<br>PAPUGOS CONSTRUKTORIUS<br>";
    }

    public function svoris()
    {
        return '<br>0.8kg</br>';
    }
}