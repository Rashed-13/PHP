<?php 
// OOP real Interface implement project
// This Interface makes our object Iterable


echo "\n";

class DistrictCollection implements IteratorAggregate{

    private $districts;

    public function __construct(){
        $this->districts = array();
    }

    function add($dictrict){
        array_push($this->districts, $dictrict);
        // return $this;
    }

    function getDistricts(){
        return $this->districts;
    }

    function getIterator():Traversable{
        return new ArrayIterator($this->districts);
    }
}

$district = new DistrictCollection();

$district->add("Naogaon");
$district->add("Rajshshi");
$district->add("Natore");
$district->add("Pabna");


foreach($district as $name){
    echo "-{$name}\n";
}