<?php
    if(!empty($_SESSION['auth'])){
        if($_SESSION['auth'] == "Admin" || $_SESSION['auth'] == 'Seller'){
            $img_src = "../imgs/";
            $php_src = "../php/";
        }else{
            $img_src = "./imgs/";
            $php_src = "./php/";
        }
    }else{
        $img_src = "./imgs/";
        $php_src = "./php/";
    }
?>



<div class="header">
    <div class="h_wrapper">
        <div class="bdy_flex_left h_left_container">
            <a href="./index.php">
                <img src="<?php echo $img_src;?>/Main-icon.png" width="340px">
            </a>
        </div>
        <div class="bdy_flex_right h_right_container">
                <?php
                if (empty($_SESSION['loggedin'])){
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
                    <div class="h_user_details">
                        <img src="'.$img_src.'user-icon.png" width="50px">
                        <div class="h_user h_box_text">Welcome, '.$_SESSION['username'].'</div>
                    </div>
                    <div class="h_box_dropdown">
                            <a href="'.$php_src.'logout.php">Logout</a>
                    </div>
                    </div>
                ';
                }
                ?>
        </div>
    </div>
</div>
