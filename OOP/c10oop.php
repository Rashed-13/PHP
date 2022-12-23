<?php 
// OOP Final keywords

// The final keyword prevents child classes from overriding a method or constant by prefixing the definition with final. If the class itself is being defined final then it cannot be extended.

// final is oposit of Abstract. Abstract means must implement final means must NOT implement

class AnimaAl{
   final public function greed(){
        echo "Hamba";
    }
}

class pAnimel extends AnimaAl{
    // this will give detal error
    
   /* final public function greed(){
        echo "Hamba";
    }*/
}


$co1 = new pAnimel;
$co1->greed();


