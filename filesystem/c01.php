<?php

$file = "c:\\Users\\jmras\\Desktop\\php\\filesystem\\files\\text.txt";

$fp = fopen( $file, "r" );

if ( !$fp ) {
    echo "File could not open successfully";
} else {
    echo "File opened\n";
}

// printing all content character wise

/* while (($char = fgetc($fp)) !== false ) {
echo "$char\n";
}
 */

// printing all content Line wise

/*while (($line = fgets($fp)) !== false ) {
echo "$line";
}
 */

// printing all content Array wise

// $get_content_as_array = file($file);

// print_r($get_content_as_array);

// printing all content togater wise

echo file_get_contents( $file );

?>