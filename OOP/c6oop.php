<?php 
// OOP Inheritence

class Animal{

    protected $name;
    public function __construct($name){
        $this->name =  $name;
    }
    public function eat(){
        echo "{$this->name} is eating";
    }

    public function run(){
        echo "{$this->name} is running";
    }

    public function sleep(){
        echo "{$this->name} is sleeping";
    }

    public function greet(){}

    protected function addTitle($title){
        $this->name = $title.$this->name;
    }
}

class Human extends Animal{
    public function greet(){
        $this->addTitle("Mr.");
        echo "{$this->name} saying Hi";
    }
}

class Cat extends Animal{
    public function greet(){
        echo "{$this->name} saying Meow";
    }
}


$h1 = new Human("Rashed");
$h1->sleep();
echo PHP_EOL;
$h1->greet();
echo PHP_EOL;

$c1 = new Cat("Tom");
$c1->greet();

