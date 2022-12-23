<?php
// OOP Object compearing

echo "\n";

class Planet {
    static function echoName(){
        
        //echo self::getName(); // Early binding ferers it self
        echo static::getName(); // Late binding, If direct called from Planet then it will be it self and is called from extended class then it will be Extended class
    }

    public static function getName(){
        echo "Planet";
    }

}



class Earth extends Planet{
    static function getName(){
        echo "Earth";
    }
}


Earth::echoName();

echo "\n";
