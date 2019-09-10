<?php
namespace Paroda;

use Paroda\BriedzioKrautuve\NaminisGyvunelis as NG;

class Kate extends NG
{
    protected $balsas = 'Miau miau miau';
    protected $maistas = 'zuvis';

    public function svoris()
    {
        return '<br>8kg</br>';
    }

}