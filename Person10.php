<?php

class Person10
{
    //une variable de classe
    //une variable d'instance est une variable qui appartiens a un seul objet
    //il faut faire la différence avec les attributs
    public $firstName;
    public $lastName;
    public $age;
    protected static $totalCount=0;

    //méthode constructeur de la classe person, le constructeur d'une classe est appeler a chaque fois que l'on appelle un nouvelle objet de cette classe
    public function __construct($firstName, $lastName, $age)
    {
        //apparement c'est l'objet courant sur lequel on travaille, j'ai compris en faite on viens dans cette procédure et on lui inssufle comme changement ce qui est voulue c'est pour cela que l'on a un $this
        // En faite on fais un retour sur cette class et les changeement s'opére
        
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;

        static::$totalCount++;
    }
    // nous voyons la subtilité par l'ajout de la fonction en mode public 
    public static function getNClasses()
    {
        return static::$totalCount;
    }
    
    //notre méthode
    public function fullName2()
    {
        //return $this->firstName . ' ' . $this->lastName . ' '. $this->age . PHP_EOL;
        //une autre manière de faire
        return sprintf("%s %s ", $this->firstName, $this->lastName);
    }
}
/*
$aziz = new Person('aziz', 'EL mADRAJ', "23");
$tato = new Person('tortoz', 'EL tizu', "25");

$Complete_name = $aziz->fullName2();
echo $Complete_name  . PHP_EOL;
 /// Nom de la classe '::' l'opérateur de résolution de porté (résolution a la classe mere), et le nom de la fonction
echo Person::getNClasses() . PHP_EOL;
*/
// des fonctions

//Récapitulatif

//Variable d'instance -> Variable qui est spécifique a un objet
//Une variable statique -> est une variable qui est partagé par l'ensemblede des objets d'une classe 
// Une constante est comme un attribut static dont la valeur ne va pas changer

// nous avons aussi des modificateurs d'accés comme private(uniquement dans la classe) / publique(acces partout) / protected(classe fille et racine)
// Une classe abstraite est une classe que l'on ne peut instancier et une méthode abstraite est une méthode qui n'a pas de corp
// Php ne supporte pas non plus l'héritage multiple