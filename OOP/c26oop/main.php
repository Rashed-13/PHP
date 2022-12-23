<?php
// OOP Autoload

// include 'bick.php';
// include 'planet.php';
// include 'spaceship.php';

function autoload( $name ) {

    if ( strpos( $name, "Planet_" ) !== false ) {

        $filename = str_replace( 'Planet_', '', $name );
        include "planets/{$filename}.php";
    } else {
        include "{$name}.php";
    }

}

spl_autoload_register( 'autoload' );

( new SpaceShip )->launch();
( new Bick )->getType();
( new Planett )->getNem();
( new Z )->laun();
( new Planet_Mars )->getMa();
