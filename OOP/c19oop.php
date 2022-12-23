<?php 
// OOP real Interface implement project
// This Interface makes our object Iterable and countable

echo "\n";

class DistrictCollection implements IteratorAggregate, Countable{

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

    function count():int{
        return count($this->districts);
    }
}

$district = new DistrictCollection();

$district->add("Naogaon");
$district->add("Rajshshi");
$district->add("Natore");
$district->add("Pabna");
$district->add("Sirajgonj");


foreach($district as $name){
    echo "-{$name}\n";
}

echo count($district);

