<?php
$filename = "\\Users\\jmras\\Desktop\\php\\filesystem\\file\\text.txt";
$students = array(
    array(
        "fname" => "Shahin",
        "lname" => "Ahmed",
        "age"   => 12,
        "class" => 7,
        "roll"  => 11
    ),
    array(
        "fname" => "Rahim",
        "lname" => "Ahmed",
        "age"   => 11,
        "class" => 7,
        "roll"  => 13
    ),
    array(
        "fname" => "Nikhil",
        "lname" => "Chandra",
        "age"   => 12,
        "class" => 7,
        "roll"  => 14
    ),
    array(
        "fname" => "Rashed",
        "lname" => "Khan",
        "age"   => 33,
        "class" => 17,
        "roll"  => 14
    )
);

$stude = array(
    "fname" => "Rashed",
    "lname" => "Khan",
    "age"   => 33,
    "class" => 17,
    "roll"  => 14
);


// Shadin,Ahmed,12,7,11
// $fp = fopen($filename, "w");

// foreach($students as $student){
//     // $data = sprintf("%s,%s,%s,%s,%s",$student["fname"],$student["lname"],$student["age"],$student["class"],$student["roll"]);
//     // fwrite($fp, $data."\n");
//     fputcsv($fp, $student);
// }
// list($serial, $a)



?>