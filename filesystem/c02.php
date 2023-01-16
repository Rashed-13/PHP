<?php

$file = "c:\\Users\\jmras\\Desktop\\php\\filesystem\\files\\c02.txt";

$fp = fopen( $file, "w" );

if ( !$fp )  {
    echo "File could not open successfully";
} else {
    echo "File opened\n";
}

fwrite($fp, "We just want to write for practicing purpost\n");
fwrite($fp, "We just want to write for practicing purpost\n");


fclose($fp);

?>