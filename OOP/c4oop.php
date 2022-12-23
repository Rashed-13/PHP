<?php 

// Access modifier public and private. Protected in the next class

class Fund{
    private $fund;

    public $a = "Rashed";
    public function __construct($initialFund){
        if( $initialFund <= 0 ){
            exit("Put a positive ammunt");
        }
        $this->fund = $initialFund;
    }

    public function addFund($fund){
        $this->fund = $this->fund + $fund;
        // $this->fund += $fund;
        return "Now your total balance is {$this->fund}\n";
    }
    
    public function deductFund($fund){

        if( $this->fund < $fund ){
            return "You have incaficient balace, your current balance is {$this->fund}\n";
        }else{
            // $this->fund = $this->fund - $fund;
            $this->fund -= $fund;
            return "Your current balance is {$this->fund}\n";
        } 
    }
    public function currentBalance(){
        return "Your current balance is {$this->fund}\n";
    }
}

$jasmin = new Fund(500);

echo $jasmin->currentBalance();
echo $jasmin->deductFund(350);
echo $jasmin->deductFund(150);
echo $jasmin->addFund(5000);




