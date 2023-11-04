

<div class="header">
    <div class="h_wrapper">
        <div class="bdy_flex_left h_left_container">
            <a href="./index.php">
                <img src="../imgs/Main-icon.png" width="340px">
            </a>
        </div>
        <div class="bdy_flex_right h_right_container">
                <?php
                session_start();

                if (!isset($_SESSION['loggedin'])){
                echo '<div class="h_box">
                <a href="login.php" class="h_login h_box_text"><div>Login</div></a>
                </div>
                <div class="h_box">
                <a href="register.php" class="h_login h_box_text"><div>Register</div></a>
                </div>';
                }
                else
                {                
                echo '<div class="h_box">
                <img src="../imgs/customer.png" width="35px">
                <div class="h_user h_box_text">'.$_SESSION['name'].'</div>
                </div>';
                }

                session_abort();
                ?>
        </div>
    </div>

</div>
