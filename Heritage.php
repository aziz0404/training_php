<?php

/*second heritage*/

require 'Form.php';
require 'Cercle.php';
require 'Triangle.php';
require 'Person10.php';
require 'Policier.php';

//Methode solid (plus particulierement la substituion de liskov, qui permet d'unifier le code ) Permet la bonne pratique
class Boom {

    public function method(Form $form) {
        echo $form->aire();
    }
}
 (new Boom)->method(New Cercle);





//test exo 4
//$carre = new Triangle;
//echo (new Cercle)->aire();
//echo (new Policier('Aziz', 'EL MADRAJ', 25, "Adjudant"))->fullName();

/* first heritage exo 8
require 'Maman.php';

require 'Enfant.php';

$reda = new Enfant;
echo $reda->getHello() . PHP_EOL;
*/