<?php
// OOP namespace auto loading
namespace CloudStorage;
include 'autoloder.php';
// include 'mail/mailer.php';
// include 'copy.php';

/////////////////////////////////////////////////////////
// we can follow systex 01 or 02 But 02 is more populer then 01. 
// All framwork use 02 syntex mostly Laravel.
/////////////////////////////////////////////////////////
/*

/// Syntex 01 ////

class Main {
    function __construct() {
        ( new Mail\Mailer() )->sentMail();
        ( new FileSystem\Scanner() )->scanner();
        ( new FileSystem\Files\Images\Jpeg() )->gerDimention();
        ( new FileSystem\Files\Images\Jpeg() )->sentNMain();
    }

}
new Main;
*/

/// Syntex 02 ////

use \CloudStorage\Mail\Mailer;
use \CloudStorage\FileSystem\Scanner;
use \CloudStorage\FileSystem\Files\Images\Jpeg;

class Main {
    function __construct() {
        ( new Mailer() )->sentMail();
        ( new Scanner() )->scanner();
        ( new Jpeg() )->gerDimention();
        ( new Jpeg() )->sentNMain();
        ( new Mailer() )->scanFrmMail();
    }

}

new Main;
