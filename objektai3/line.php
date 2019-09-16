<?php

class Html
{
    private $size = 10;
    private $color = 'Black';
    private $letter_spacing = 0.5;
    private $text = 'No Text';

    public function print() 
    {
        echo '<br>';
        echo '<span style="
        font-size:'.$this->size.'px;
        color:'.$this->color.';
        letter-spacing:'.$this->letter_spacing.'px;
        ">'.$this->text.'</span>';
        echo '<br>';
        return $this;
    }

    public function size($size) 
    {
        $this->size = $size;
        return $this;
    }

    public function color($color) 
    {
        $this->color = $color;
        return $this;
    }

    public function text($text) 
    {
        $this->text = $text;
        return $this;
    }

    public function letter_spacing($letter_spacing) 
    {
        $this->letter_spacing = $letter_spacing;
        return $this;
    }

    public function return_other(Html $obj)
    {
        return $obj;
    }

    public static function create()
    {
        return new self;
    }


}


$string2 = new Html;

$string2->color('blue');


Html::create()
->text('LABADIENA')
->size(48)
->letter_spacing(70)
->print()
->size(38)
->letter_spacing(80)
->print()
->size(28)
->letter_spacing(90)
->print()
->size(18)
->letter_spacing(90)
->print()
->size(10)
->letter_spacing(100)
->print()
->size(5)
->letter_spacing(120)
->print();