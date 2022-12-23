<?php
// OOP Object compearing

echo "\n";

class MotorCycle {
    private $parameters;
    function __construct( $displacement, $capacity, $milage ) {
        $this->parameters = [];
        $this->parameters['milage'] = $milage;
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
    }

// public function getDisplacement() {

//     return $this->parameters['displacement'];

// }

// public function setDisplacement( $displacement ) {

//     return $this->parameters['displacement'] = $displacement;
    // }

    function __isset( $name ) {

// echo "\n{$name} Not found";
        if ( !isset( $this->parameters[$name] ) ) {
            echo "\n{$name} Not found";
            // return false;
        }

    }

    function __get( $name ) {
        return $this->parameters[$name];
    }

    function __set( $name, $value ) {
        return $this->parameters[$name] = $value;
    }

}

$pulsar = new MotorCycle( "150cc", "16ltr", "40" );
// echo $pulsar->getDisplacement();
echo $pulsar->displacement;

if ( isset( $pulsar->tiresize ) ) {
    echo $pulsar->tiresize;
}else{
    echo "\nHello";
}

echo "\n";
