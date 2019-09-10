<?php
namespace Paroda;

use Paroda\BriedzioKrautuve\NaminisGyvunelis;

class Ziurkenas extends NaminisGyvunelis 
{
    protected $balsas = 'Ziur ziur';
    protected $maistas = 'morka';

    public function svoris()
    {
        return '<br>132 G</br>';
    }
}