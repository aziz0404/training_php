<?php

class Person 
{
    public $firstName;
    public $lastName;
    public $age;

    //méthode constructeur de la classe person, le constructeur d'une classe est appeler a chaque fois que l'on appelle un nouvelle objet de cette classe
    public function __construct($firstName, $lastName, $age)
    {
        //apparement c'est l'objet courant sur lequel on travaille, j'ai compris en faite on viens dans cette procédure et on lui inssufle comme changement ce qui est voulue c'est pour cela que l'on a un $this
        // En faite on fais un retour sur cette class et les changeement s'opére
        
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
    public function danser()
    {
        echo $this->lastName . "est entrain de danser." . PHP_EOL;
    }

    public function fullName()
    {
        echo $this->firstName . ' ' . $this->lastName . PHP_EOL;
    }
    //nous pouvons aussi faire en sorte de stocker la variable
    //notre méthode
    public function fullName2()
    {
        //return $this->firstName . ' ' . $this->lastName . ' '. $this->age . PHP_EOL;
        //une autre manière de faire
        return sprintf("salut %s %s ", $this->firstName, $this->lastName);
    }
}
//On effectue une instanciation quand on integre a une variable une class
//Nous pouvons récuperer les argument d'une classe exemple celle de person

//TEST
/*$aziz = new Person('aziz', 'EL mADRAJ', "23");
$tato = new Person('tortoz', 'EL tizu', "25");

$Complete_name = $aziz->fullName2();
echo $Complete_name;
*/
//exo 9 méthodes
/*
$tato->fullName();
*/
/*appelle d'une fonction
$aziz->danser();
*/
/*permet d'afficher toute les valeur d'une variable
var_dump($aziz->firstName);
var_dump($aziz->lastName);
var_dump($aziz->age);

var_dump($tato->firstName);
var_dump($tato->lastName);
var_dump($tato->age);
*/
