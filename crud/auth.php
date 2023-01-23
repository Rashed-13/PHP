<?php 
session_start();
$error = false;
$_SESSION['logedin'] = '';

$fp = fopen('./data/users.txt','r');

// $username = $_POST['username'] ;
// $password = $_POST['password'] ;


if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;
    $_SESSION['logedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['roll'] = false;
    
    while($data = fgetcsv($fp)){
        if($data[0] == $username && $data[1] ==sha1($password) ){
            $_SESSION['logedin'] = true;
            $_SESSION['user'] = $username;
            $_SESSION['roll'] = $data[2];
            header('location:index.php');
        }
    }

    if( ! $_SESSION['logedin'] ){
        $error = true;
    }
}


if(isset($_GET['logout'])){

    $_SESSION['logedin'] = false;
    $_SESSION['user'] = false;
    $_SESSION['roll'] = false;

    session_destroy();
    
    header('location:index.php');
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth form</title>
    <link rel="stylesheet" href="./assets/css/milligram.min.css">
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Authenticaion Project</h2>
                <?php 
                    if(true == $_SESSION['logedin']){
                        echo "<p>Hello Admin, Welcome! </p>";
                    }else{
                        echo "<p>Hello Stanger, login bellow</p>";
                    }
                ?>
                
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php 
                    if($_SESSION['logedin'] == false):
                        if($error){
                            echo "<blockquote>Username or Password didn't match</blockquote>";
                        }
                ?>
                <form action="auth.php" method="POST">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <input type="submit" value="Submit">
                </form>
                <?php 
                    endif;
                ?>
            </div>
        </div>
    </div>
</body>
</html>