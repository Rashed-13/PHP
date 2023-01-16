<?php

$file = "c:\\Users\\jmras\\Desktop\\php\\filesystem\\files\\c06.txt";

$students = array(
    array(
        "fname" => "Rashed",
        "lname" => "Khan",
        "class" => 12,
        'roll'  => 5,
        "age"   => 18,
    ),
    array(
        "fname" => "Jasmin",
        "lname" => "Ara",
        "class" => 12,
        'roll'  => 15,
        "age"   => 17,
    ),
    array(
        "fname" => "Afia",
        "lname" => "Jannat",
        "class" => 12,
        'roll'  => 1,
        "age"   => 16,
    )
);


//// Storing/Writing manual way in the file ////

/*
$fp = fopen( $file, "w" );

foreach ( $students as $st ) {
$data = sprintf( "%s,%s,%s,%s,%s\n", $st['fname'], $st['lname'], $st['class'], $st['roll'], $st['age'] );
fwrite( $fp, $data );
}

fclose( $fp );
 */


//// Storing/Writing using buildin function in the file ////


/*
$fp = fopen( $file, "w" );

foreach($students as $st){
    fputcsv($fp, $st);
}
fclose($fp);
/*





//// Reading file in traditional way //// 

/*
$fp = fopen( $file, "r" );

while ( $data = fgets( $fp ) ) {
    $st = explode( ",", $data);
    printf( "Name = %s %s\nClass = %s\nRoll = %s\nAge = %s\n", $st[0], $st[1], $st[2], $st[3], $st[4] );
}
fclose($fp);
*/

//// Adding new Item //// 

/*
$ns = array(
    "fname" => "Rabbi",
    "lname" => "Khan",
    "class" => 12,
    'roll'  => 2,
    "age"   => 17,
);

$fp = fopen($file, "a");
fputcsv($fp, $ns);
fclose($fp);

*/

//// Reading file by fgetcsv() way //// 


/*
$fp = fopen( $file, "r" );

while($st = fgetcsv($fp)){
    printf( "Name = %s %s\nClass = %s\nRoll = %s\nAge = %s\n", $st[0], $st[1], $st[2], $st[3], $st[4]."\n");
}
fclose($fp);
*/

//// Removing a perticuler line //// 

$data = file($file);
unset($data[3]);
// file_put_contents($file, $data);

// or

$fp = fopen( $file, "w" );
foreach($data as $line){
    fwrite($fp, $line)."\n";
}

print_r($data);

