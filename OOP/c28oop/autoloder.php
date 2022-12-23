<?php

spl_autoload_register( function ( $name ) {
    //DIRECTORY_SEPARATOR is a buildin constant value is (/)/(\) based on machin
    $path = strtolower( str_replace( 'CloudStorage\\', '', $name ) . ".php" );
    $path = str_replace( '\\', DIRECTORY_SEPARATOR, $path );
    include $path;

} );

?>