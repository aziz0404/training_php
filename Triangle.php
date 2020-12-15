<?php

class Triangle extends Form {
    private $hauteur = 3;
    private $base = 7;
    
    public function aire() {
        return ($this->hauteur * $this->base)/2; 
    }
    
}