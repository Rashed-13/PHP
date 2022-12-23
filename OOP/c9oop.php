<?php 
// OOP Abstract property and methods

abstract class Aninal{
    public $n = "Rashed is my name";
    public function showName(){
        return $this->n;
    }
    static public $love = "Jasmin\n";
    abstract public function nName();
}

class Cow extends Aninal{
    public function nName(){
        echo parent::showName();
    }
}

echo Aninal::$love;

$a1 = new Cow();
$a1->nName();