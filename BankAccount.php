<?php

//seters et geters: seters sont des fonctions qui vont permettre de modifier des attribut et les geters vont permettre de pouvoir acceder a des attribut

class BankAccount
{
    public $accountNumber;
    //now if i put balance in private we can not modify the variable, just in
    //the class
    private $balance = 0;
    

    public function __construct($accountNumber)
    {
        $this->accountNumber = $accountNumber;

    }
    //Mettre une initialisation
    public function setBalance($balance)
    {
        if($balance < 100000) {
            throw  new Exception("L'argent est trop petit!");
        }
        $this->balance = $balance;
    }
    //Récuperer une valeur
    public function getBalance()
    {
        return $this->balance * 100;
    }
}
$compteBancaireDeAziz = new BankAccount("154654654654");

var_dump($compteBancaireDeAziz);
$compteBancaireDeAziz->setbalance(150000) ;
var_dump($compteBancaireDeAziz);

var_dump($compteBancaireDeAziz->getBalance());
// il y'a une notions d'encapsulation a prendre en compte également. Ici on peut directement 
//- modifier la variable comme on ne cache pas les informations (cela passe outre l'avertissement)

/*$compteBancaireDeAziz->balance=5000;
var_dump($compteBancaireDeAziz->balance);*/

