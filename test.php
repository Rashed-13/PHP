<?php 


// $a = "Rashed,Khan,12,5,18";

// $ed = explode(",", $a,2 );

// print_r($ed);



class Person{
    public function __construct($fname, $lname, $age)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->age = $age;
    }

    public function pDetails(){
        return "Name = {$this->fname} {$this->lname}\nAge = {$this->age}";
    }


}

$p1 = @new Person("Rashed", "Khan", 32);

// $pd = serialize($p1);
// echo $pd ;
// echo PHP_EOL;
// $pdu = unserialize($pd);
// print_r( $pdu);


// for($v = 1; $v<6;$v++){
//     if($v == 3){
//         echo "$v goted";
//         break;
//     }
//     echo $v .PHP_EOL;
// }


// function print_name(){
//     echo "Rashed";
//     return false;
// }

// $a = print_name();

// if($a){
//     echo "Its ok";
// }
$b = array(
    array(
        'id'    => 1,
        'fname' => 'Kamal',
        'lname' => 'Ahmed',
        'roll'  => 11,
    ),
    array(
        'id'    => 2,
        'fname' => 'Jamal',
        'lname' => 'Ahmed',
        'roll'  => 12,
    ),
    array(
        'id'    => 3,
        'fname' => 'Ripon',
        'lname' => 'Ahmed',
        'roll'  => 9,
    ),
    array(
        'id'    => 4,
        'fname' => 'Nihkil',
        'lname' => 'Chandro',
        'roll'  => 8,
    ),
    array(
        'id'    => 5,
        'fname' => 'Jhon',
        'lname' => 'Rozario',
        'roll'  => 7,
    )
);
$a = array_column($b,'roll','id');

print_r($a);

echo max($a);




?>