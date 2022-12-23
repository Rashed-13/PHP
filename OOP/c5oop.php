<?php 
// Hexa color to RGB color conveter project based on OOP
class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;

    public function __construct($color = ''){
        $this->color = ltrim( $color, "#" );
        $this->persColor();
    }

    public function get_color(){
        return $this->color;
    }

    public function set_color($color){
        $this->color = ltrim( $color, "#" );
        $this->persColor();
    }

    private function persColor(){
        if($this->color){
            list( $this->red, $this->green, $this->blue ) = sscanf($this->color, '%02x%02x%02x');
        }
    }

    public function getRGBColor(){
        return array($this->red, $this->green, $this->blue);
    }

    public function readRGBColor(){
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }

    public function getRed(){
        return $this->red;
    }

    public function getGreen(){
        return $this->green;
    }

    public function getBlue(){
        return $this->blue;
    }

}

$newColor = new RGB("#0000ff");
$newColor->readRGBColor();



