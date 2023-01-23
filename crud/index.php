<?php 
session_start();
require './inc/functions.php';


$task = $_GET['task'] ?? "report";
$error = false;
//Seeding data
if( $task == 'seed'){
    seed();
}

if(isset($_POST['submit'])){
    $fname = htmlentities($_POST['fname']);
    $lname = htmlentities($_POST['lname']);
    $roll = htmlentities($_POST['roll']);

    $adds = addStudent($fname, $lname, $roll);

    if($adds){
        $error = true;
    }
}



if($task == 'edit'){
    $id = $_GET['id'];
    $cr = getCurrentStudent($id);
}



if(isset($_POST['submitEdit'])){
    $fname = htmlentities($_POST['fname']);
    $lname = htmlentities($_POST['lname']);
    $roll = htmlentities($_POST['roll']);

    $cr = array(
        'fname' => $fname,
        'lname'=>$lname,
        'roll'=>$roll
    );

    $id = $_POST['id'];
    $updateS = updateStudent($id, $fname, $lname, $roll);

    if($updateS){
        $error = true;
    }
}



if($task == 'delete'){
    $id = $_GET['id'];

    deleteStudent($id);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Project</title>
    <link rel="stylesheet" href="./assets/css/milligram.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
                <h2>Project 2 CRUD </h2>
                <p>A simple project to perform CRUD operation usig palin files and PHP</p>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php include './inc/templates/nav.php';?>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php if($error){
                    ?>
                        <blockquote>
                            <p>Duplicate Found</p>
                        </blockquote>
                    <?php
                };?>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php if($task == 'report' && $error == false){generateReport();}; ?>
            </div>
        </div>
        <div class="row">
            <div class="column column-60 column-offset-20">
                <?php if($task == 'add'): ?>
                    <form action="index.php" method="POST">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname">
                        <label for="roll">Roll</label>
                        <input type="number" min='1' max = '200' name="roll" id="roll">
                        <input type="submit" name="submit" value="submit">
                    </form>
                <?php endif;?>
            </div>
        </div>
        <?php if(hasPrivilege()): ;?>
            <?php if($task == 'edit' || $error == true):;?>
                <div class="row">
                    <div class="column column-60 column-offset-20">
                        <form action="index.php" method="POST">
                            <input type="hidden" name ='id' value="<?php echo $id;?>">
                            <label for="fname">First Name</label>
                            <input type="text" name="fname" id="fname" value="<?php echo $cr['fname'] ;?>">
                            <label for="lname">Last Name</label>
                            <input type="text" name="lname" id="lname" value="<?php echo $cr['lname'] ;?>">
                            <label for="roll">Roll</label>
                            <input type="number" min='1' max = '200' name="roll" id="roll" value="<?php echo $cr['roll'] ;?>">
                            <input type="submit" name="submitEdit" value="update">
                        </form>
                    </div>
                </div>   
            <?php endif;
        endif;
            print_r($_SESSION);
        ?>
    </div>
    <script type="text/javascript" src="./assets/js/app.js"></script>
</body>
</html>


