<?php 
// OOP static method and property

class MathCalculator{
    public $number;
    static $name;
    static function fibonacci($n){
        echo self::$name;
        self::doingSomething();
        echo "Fibonacci series up to {$n}\n";
    }

    static function doingSomething(){
        echo "Doing something\n";
    }

    function factorial($n){
        self::$name = "ABCD\n";
        self::doingSomething();
        $this->doingSomething();
        $this->number = 12;
        // $this->number = 12;
         echo "Calculating factorial of {$n}\n";
    }
}


$mathc = new MathCalculator();
$mathc->factorial(8);

MathCalculator::fibonacci(7);
echo MathCalculator::$name;

