<?php
    session_start();

    $admin = "../imgs/EZ_GG.png";
    $user = "imgs/EZ_GG.png";

    if($_SESSION['auth'] == "Admin"){
        $path = $admin;
    }else{
        $path = $user;
    }
    session_abort();
?>

<div class="header">
    <div class="left lwarpper">
        <div id="icon">
            <img src="<?php echo $path?>">
        </div>
        <div id="dropnav">
            &nbsp;
        </div>
    </div>
    <div class="right rwarpper">
        <?php 
        session_start();
        if(!empty($_SESSION['loggedin'])){
            echo '
            <div id="user">
                <button class="dropbtn">Welcome,<br>'.$_SESSION['name'].'</button>
                <div class="dropdown-content">
                    <a href="#">Account</a>
                    <a href="./php/logout.php">Logout</a>
                </div>
            </div>
            ';
        }
        else{
            echo '
            <div id="user">                
                <button class="dropbtn">Login/Register</button>
                <div class="dropdown-content">
                    <a href="#">Login</a>
                    <a href="#">Register</a>
                </div>
            </div>
            ';
        }
        ?>
    </div>
</div>
