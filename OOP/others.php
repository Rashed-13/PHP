<?php 
// OOP Inheritance of static method and property

class A{
    protected $a = 10;
    function hiA(){
        echo "Hi";
    }
}

class B extends A{
    // like bellow lines, we can not access paret class's properties and methods by $this and parent keywords. because it is class, $this and parent keywords works in object context means AFTER creating object and we also know that class is just a buildin block of objetc, nothing is directly accessible here. we have to access everything from it's object. even we can not echo directly in class like this echo "Rashed"; or see class D. we have to take assist of property and method and print the value of property and mehods from it's object.

    //public $dd = $this-> a + $n;
    //public $dd = parent::$a + $n;
    
    public function __construct($n){
        $this->dd = $this-> a + $n;
    }
    function by(){
        echo $this->dd;
    }  
}


// class D{
//     echo "rashed";
// }


$c = new B(90);
$c->by();
echo PHP_EOL;
echo $c->dd;

echo PHP_EOL;



$string = "Rashed_Jasmin";

// $ps = strpos($string, "h");

echo str_replace("Rashed_","", $string, $count);


echo PHP_EOL;

echo __LINE__;



// if(strpos($string, "h")){
//     echo "hello";
// }

// echo $ps ;




// proyojone apanr pase, Bondhon


