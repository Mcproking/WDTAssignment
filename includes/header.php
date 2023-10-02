<div class="header">
    <div class="left lwarpper">
        <div id="icon">
            &nbsp;
        </div>
        <div id="dropnav">
            &nbsp;
        </div>
    </div>
    <div class="right rwarpper">
        <?php 
        session_start();
        if(!empty($_SESSION['loggedin'])){
                echo '<div id="user">'.$_SESSION['name'].'</div>';
        }
        else{
            echo '<div id="login">Login</div>';
        }
        ?>
    </div>
</div>
