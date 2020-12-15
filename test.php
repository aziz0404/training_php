<?php

class A {
    protected static $attribut1=8;

    public function methode1() {
        echo static::$attribut1 . PHP_EOL;
    }
}
//parents fait référence a la classe parents et donc évite les fautes
class B extends A{

    protected static $attribut1 = 42;
    public function method1() {
        parent::methode1();
        
    }

}
(new B)->method1();