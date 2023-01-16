<?php

$file = "c:\\Users\\jmras\\Desktop\\php\\filesystem\\files\\c08.txt";

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


// Storing JSON data

// $jData = json_encode($students);
// file_put_contents($file,$jData);


// Reading JSON data

$data = file_get_contents($file);
// white we decoding and not pass second parameter true then it will return an object, If we pass true it will return an Array
$dData = json_decode($data);

echo $dData[0]->fname;

