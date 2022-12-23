<?php 
// constructor, $this keywords, condition checking in method
namespace CloudStorage;
class Humen{
    public $name;
    public $age;
    function __construct($name, $age = 0){
        $this->name = $name;
        $this->age = $age;
    }
    
    function sayHi(){
        echo "Salam\n";
        $this->sayName();
    }
    function sayName(){
        if($this->age){
            echo "My name is {$this->name}, I am {$this->age} years old";
        }else{
            echo "My name is {$this->name}, I don't know how old I am ";
        }
    }
}

$h1 = new Humen("Rubel", 40);
$h2 = new Humen("Rashed", 33);
$h3 = new Humen("Momo");

$h1->sayHi();


