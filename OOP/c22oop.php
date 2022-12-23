<?php
// OOP Object compearing

echo "\n";

class Planet {
    public $name;

    public function __construct( $name ) {
        $this->name = $name;
    }

}



$e = new Planet( "Earth" );
$e1 = new Planet( "Earth" );
$m = new Planet( "Moon" );

if ( $e === $e1 ) {
    echo "Similar Planets";
} else {
    echo "Not Similar";
}

echo "\n";
