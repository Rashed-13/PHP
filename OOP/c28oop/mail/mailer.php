<?php 
// OOP namespace
namespace CloudStorage\Mail;

use \CloudStorage\FileSystem\Scanner;

class Mailer{
    function sentMail(){
        echo "Sending Mail\n";
    }

    function scanFrmMail(){
        $m = new Scanner;
        $m->scanner("I am scaner from Mailer");
    }
}





