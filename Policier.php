<?php

class Policier extends Person10
{

    private $grade;

    public function __construct($firstName, $lastName, $age, $grade)
    {
        //apparement c'est l'objet courant sur lequel on travaille, j'ai compris en faite on viens dans cette procédure et on lui inssufle comme changement ce qui est voulue c'est pour cela que l'on a un $this
        // En faite on fais un retour sur cette class et les changeement s'opére
        
        parent::__construct($firstName, $lastName, $age);

        $this->grade = $grade;
    }

    public function fullName()
    {
        //return parent::fullName2() .'policier';
        return parent::fullName2() ."policier"." ". $this->grade . PHP_EOL;
    }
}

