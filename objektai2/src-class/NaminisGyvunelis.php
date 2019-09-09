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