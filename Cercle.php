<?php

class Cercle extends Form
{
    public $rayon = 5; 
    public function aire()
    {
        return pi() * $this->rayon * $this->rayon ;
    }
}
