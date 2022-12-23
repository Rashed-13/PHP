<?php 
// OOP type hunting/ forcing methods to pass a perticuler object
class Shape{};

class Shapes{
    private $shapes;
    public function __construct(){
        $this->shapes = array();
    }
    public function addShapes(Shape $shape){
        array_push($this->shapes, $shape);
    }
    public function totalShap(){
        return count($this->shapes);
    }
}


class Rectangle extends Shape {

}


class Triangle extends Shape{

}   

class Student {
    
}  

$shapesCollection = new Shapes;

$shapesCollection->addShapes(new Rectangle);
$shapesCollection->addShapes(new Triangle);
echo $shapesCollection->totalShap();

