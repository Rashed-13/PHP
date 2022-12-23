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

    public function getDisplacement() {
        return $this->parameters['displacement'];
    }

    public function setDisplacement( $displacement ) {
        return $this->parameters['displacement'] = $displacement;
    }
// $arguments is an index array
    public function __call( $name, $arguments ) {
        echo "Hello";
    }

    public static function __callStatic( $name, $arguments ) {
        echo "Hello";
    }

}

$pulsar = new MotorCycle( "150cc", "16ltr", "40" );
// echo $pulsar->getDisplacement();
// echo $pulsar->displacement;

echo $pulsar->run();

echo "\n";