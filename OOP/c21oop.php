<?php 
// OOP Object clonning

echo "\n";


class Color{
    public $color;
    public $AGE = 2;

    public function __construct($color){
       $this->color = $color; 
    }

    function setColor($color){
        $this->color = $color; 
    }

    function __toString(){
        return "\nDon't try to print direct object, use property or method\n";
    }
    
    private function privateF(){
        echo "I am from private function";
    }

    public function hel(){
        $b = new Color("d");
        $c = get_class_methods($b);
        print_r($c);
    }
}


$c = new Color("Red");

class C extends Color{
    public function aa(){
        echo "AA";
    }
}

var_dump($c);

echo $c;

$d  = new C("h");

echo "\n";
$aa = get_class_methods($d);

print_r($aa);

$c->hel();
echo "\n";


