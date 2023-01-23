<?php 
session_start([
    'cookie_lifetime' => 300
]);
$error = false;
$_SESSION['logedin'] = '';
if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username'] == 'admin' &&  md5($_POST['password']) == 'a51e47f646375ab6bf5dd2c42d3e6181'){
        $_SESSION['logedin'] = true;
    }else{
        $_SESSION['logedin'] = false;
        $error = true;
    }
}

echo sha1('rabbit');

if(isset($_POST['logout'])){
    $_SESSION['logedin'] = false;
    session_destroy();
    // header('location:/session/auth.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auth form</title>
    <link rel="stylesheet" href="../crud/assets/css/milligram.min.css">
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
                    else:
                ?>
                <form action="auth.php" method="POST">
                    <input type="submit" name="logout" value="Log out">
                </form>
                <?php 
                    endif;
                ?>
            </div>
        </div>
    </div>
</body>
</html>