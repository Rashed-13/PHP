<?php 
// OOP Object clonning

echo "\n";


class Color{
    public $color;

    public function __construct($color){
       $this->color = $color; 
    }

    function setColor($color){
        $this->color = $color; 
    }
}

class FavColor{
    public $data;
    public $color;

    public function __construct($data, $color){
        $this->data = $data;
        $this->color = new Color($color);
    }

    public function updateColor($color){
        $this->color->setColor($color);
    }

    public function __clone(){
        $this->color = clone $this->color;
    }

}

$fc1 = new FavColor('Some color', "Red");

print_r($fc1);

$fc2 = clone $fc1;

print_r($fc2);

$fc2->updateColor("Green");


// print_r($fc2);

// print_r($fc1);







class Me{
    public $name = "Rashed";
}


echo (new Me)->name;

echo "\n";