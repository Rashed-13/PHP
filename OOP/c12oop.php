<?php 
// OOP Interface

interface BaseAnimal{
    function isAlive();
    function canEat();
    function brees();
}


class Animal implements BaseAnimal{
    function isAlive(){}
    function canEat(){}
    function brees(){}
}


interface BaseHuman extends BaseAnimal{
    function canDrive();
}


class Humen implements BaseHuman{
    public $name;
    protected $age = 33;
    function isAlive(){}
    function canEat(){}
    function brees(){}
    function canDrive(){}

    function __construct($name){
        $this->name = $name;
        self::showAge();
    }

    public function showAge(){
        echo $this->age;
    }

}

class Humon extends Humen{
    public $na = "Rashed\n";
}


$h1 = new Humon("Rashed");
echo $h1->na;
// echo $h1->showAge();


