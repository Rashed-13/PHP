<?php 
// OOP static method and property scope
echo "\n";

class A{
    static $name;
    static function sayHi(){
        self::$name = "Hello\n";
        echo "Hi Form A\n";
    }
}

class B extends A{
    static function sayHi(){
        echo "Hi From B\n";
        parent::sayHi();
    }
}

B::sayHi();


