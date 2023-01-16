<?php

$file = "c:\\Users\\jmras\\Desktop\\php\\filesystem\\files\\c07.txt";

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
        "age"   => 17
    ),
    array(
        "fname" => "Afia",
        "lname" => "Jannat",
        "class" => 12,
        'roll'  => 1,
        "age"   => 16
    )
);

$student =     array(
    "fname" => "Afif",
    "lname" => "Hasan",
    "class" => 12,
    'roll'  => 5,
    "age"   => 16
);

// Storing serialized data

$data = serialize($students);
file_put_contents($file, $data, LOCK_EX);
// print_r( $data);


// Adding data

// $data = unserialize( file_get_contents($file));

// unset($data[2]);
// array_push($data, $student);
// print_r( $data);


