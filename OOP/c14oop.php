<?php 
// OOP Inheritance of static method and property

class A{
    static function sayHi(){
        echo "Hi Form A\n";
    }
}

class B extends A{
    static function sayHi(){
        // echo "Hi From B\n";
        // A::sayHi();
    }
}

B::sayHi();

