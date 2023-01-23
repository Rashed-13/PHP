<div class="nav-container">
    <div class="float-left">
        <p>
            <a href="/crud/index.php?task=report">All Student</a> 
            <?php if(hasPrivilege()): ;?>
            | <a href="/crud/index.php?task=add">Add Student</a> 
            <?php endif;?> 
            <?php if(isAdmin()): ;?>
            | <a href="/crud/index.php?task=seed">Seed</a>
            <?php endif;?>
        </p>
    </div>
    <div class="float-right">
        <?php 
            if( !isset($_SESSION['logedin']) ){
                echo ' <a href="auth.php">Log in</a>';
            }else{?>
                <a href="auth.php?logout=true">Log out ( <?php echo $_SESSION["roll"]?> )</a>
           <?php }
        ?>
        
    </div>
</div>