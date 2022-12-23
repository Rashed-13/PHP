<?php
namespace CloudStorage\FileSystem\Files\Images;
// Bellow syntext can be one way

/*
class Jpeg implements \CloudStorage\FileSystem\Files\Contracts\Imagecontract{
    function gerDimention() {
        echo "This is imageDimention";
    }
}
*/

// Another way is bellow and this most populer

use \CloudStorage\FileSystem\Files\Contracts\Imagecontract;
use \CloudStorage\Mail\Mailer;

class Jpeg implements Imagecontract{
    function gerDimention() {
        echo "This is imageDimention\n";
    }

    function sentNMain(){
        $m = new Mailer();
        $m->sentMail();
    }
}

;?>