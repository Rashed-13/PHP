<?php 
// OOP class constant and assess modifier
// Inside class, Constant always have in static mood what if we diclal it with static keyword or not, it is always static and we can access in both static and object mood. bellow's all systexs are valid
echo "\n";

define("OK", 123);

const HI = 456;

echo HI, OK;
echo PHP_EOL;

class myClass{
    const CITY = "Dhaka";

    function sayHi(){
        echo "Hi from ".self::CITY;
        echo PHP_EOL;
        echo "Hi from ".$this::CITY;
    }
}


$c1 = new myClass();
$c1->sayHi();
echo PHP_EOL;
echo $c1::CITY;
echo PHP_EOL;
echo myClass::CITY;
