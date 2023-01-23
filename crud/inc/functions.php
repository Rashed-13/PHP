<?php
define( 'DB_NAME', 'C:\\Users\\jmras\\Desktop\\php\\crud\\data\\data.txt');


function seed() {
    if(!isAdmin()){
        header('location:index.php');
        return;
    }
    $students = array(
        array(
            'id'    => 1,
            'fname' => "Rashed",
            'lname' => "Khan",
            'roll'  => 5,
        ),
        array(
            'id'    => 2,
            'fname' => "jasmin",
            'lname' => "Ara",
            'roll'  => 3,
        ),
        array(
            'id'    => 3,
            'fname' => "Raisa",
            'lname' => "Jannar",
            'roll'  => 1,
        ),
        array(
            'id'    => 4,
            'fname' => "Rekha",
            'lname' => "Banu",
            'roll'  => 2,
        ),
    );

    $sStudent = serialize( $students );
    file_put_contents( DB_NAME, $sStudent, LOCK_EX );
}

function generateReport(){
    $uSStudents = file_get_contents(DB_NAME, LOCK_SH);
    $students = unserialize($uSStudents);
    ?>
        <table>
            <tr>
                <td>Name</td>
                <td>Roll</td>
                <?php if(hasPrivilege()): ;?>
                <td>Action</td>
                <?php endif;?>
            </tr>
            <?php
                foreach($students as $student){
                    ?>
                        <tr>
                            <td><?php printf("%s %s",$student['fname'], $student['lname']);?></td>
                            <td><?php printf("%s",$student['roll']);?></td>
                            <?php if(isAdmin()): ;?>
                            <td width='25%'><?php printf("<a href='/crud/index.php?task=edit&id=%s'>Edit</a> | <a class='delete' href='/crud/index.php?task=delete&id=%s'>Delete</a>",$student['id'],$student['id']);?></td>
                            <?php endif;?>
                            <?php if(isEditor()): ;?>
                            <td width='25%'><?php printf("<a href='/crud/index.php?task=edit&id=%s'>Edit</a> ", $student['id']);?></td>
                            <?php endif;?>
                        </tr>
                    <?php
                }
            ?>
        </table>
    <?php
}

function addStudent($fname, $lname, $roll){
    if(!isAdmin()){
        header('location:index.php');
        return;
    }
    $uSStudents = file_get_contents(DB_NAME, LOCK_SH);
    $students = unserialize($uSStudents);
    $found = false;

    foreach($students as $student){
        if($student['roll'] == $roll){
            $found = true;
            break;
        }
    }

    if($found){
        return true;
    }else{
        $id = count($students) + 1;
        $student = array(
            'id'    => $id,
            'fname' => $fname,
            'lname' => $lname,
            'roll'  => $roll
        );
    
        array_push($students, $student);
    
        $serialisedS = serialize($students);
        file_put_contents(DB_NAME, $serialisedS, LOCK_EX);
    }
}

function getCurrentStudent($id){
    $sStudent = file_get_contents(DB_NAME);
    $students = unserialize($sStudent);

    foreach($students as $student){
        if($student['id'] == $id){
            return $student;
        }
    }
}

function updateStudent($id, $fname, $lname, $roll){
    if(!hasPrivilege()){
        header('location:index.php');
        return;
    }
    $sStudent = file_get_contents(DB_NAME);
    $students = unserialize($sStudent);
    $found = false;
    foreach($students as $student){
        if($student['roll'] == $roll && $student['id'] != $id){
            $found = true;
            break;
        }
    }

    if($found){
        return true;
    }else{
        $students[$id-1]['fname'] = $fname;
        $students[$id-1]['lname'] = $lname;
        $students[$id-1]['roll'] = $roll;

        $serialisedS = serialize($students);
        file_put_contents(DB_NAME, $serialisedS, LOCK_EX);
    }
}


function deleteStudent($id){
    if(!isAdmin()){
        header('location:index.php');
        return;
    }
    $sStudent = file_get_contents(DB_NAME);
    $students = unserialize($sStudent);

    unset($students[$id-1]);

    $serialisedS = serialize($students);
    file_put_contents(DB_NAME, $serialisedS, LOCK_EX);

    header('location:index.php');
}


function isAdmin(){
    if(isset($_SESSION['roll'])){
        if('Admin' == $_SESSION['roll']){
            return true;
        }else{
            return false;
        }
    }
    return false; 

    // return isset($_SESSION['roll']) ?? false;


}


function isEditor(){
    if(isset($_SESSION['roll'])){
        if('Editor' == $_SESSION['roll']){
            return true;
        }else{
            return false;
        }
    }
    return false; 
}


function hasPrivilege(){
    if(isAdmin() || isEditor()){
        return true;
    }
    return false;
}