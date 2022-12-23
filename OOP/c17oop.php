<?php 
// OOP class constant and assess modifier
// __get($prop_name) and __set($prop_nam, $value) magic methods
// These methods are automatically called while we try to access/set value an unexist property or access protected by access modifier. we can use these functions for showing error message or returnning/printing/setting the property value.
echo "\n";

class Student{
    public $name;
    public $age;
    private $class;

    public function __construct( $name = "", $age = "", $class = "" ){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    // function getName(){
    //     return $this->name;
    // }

    // function setName($name){
    //     $this->name = $name;
    // }

    // function getAge(){
    //     return $this->age;
    // }

    // function setAge($age){
    //     $this->age = $age;
    // }

    // function getClass(){
    //     return $this->class;
    // }

    // function setClass($class){
    //     $this->class = $class;
    // }

    public function __get($pn){
        echo "Property '{$pn}' dose't exist or protected the way you are try to accessing";
    }

    public function __set($prop_name, $value){
        echo "{$prop_name} = {$value}";
    }

}


$s1 = new Student("Rabbi", 30, "Inter");
echo $s1->age;
echo PHP_EOL;
$s1->nam = "Rashed";
echo PHP_EOL;
echo $s1->name;

