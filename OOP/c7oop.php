<?php 
// OOP Parent child scopes

class ParentClass{
    function __construct(){
        $this->sayHi();
        // self::sayHi(); for self/ParentClass class property and method access
    }

    function sayHi(){
        echo "Say Hi from parent\n";
    }
}

class ChildClass extends ParentClass{


    function sayHi(){
        parent::sayHi();
        echo "say Hi from child";
    }
}

$cc = new ChildClass;
