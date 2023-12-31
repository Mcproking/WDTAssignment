<?php
    if(!empty($_SESSION['auth'])){
        if($_SESSION['auth'] == "Admin" || $_SESSION['auth'] == 'Seller'){
            $img_src = "../imgs/";
            $src = "../";
        }else{
            $img_src = "./imgs/";
            $src = "./";
        }
    }else{
        $img_src = "./imgs/";
        $src = "./";
    }
?>

<div class="footer">
    <div class="f_wrapper">
        <div class="f_content_wrapper">
            <div class="bdy_flex_left f_left_container">    
                <div class="f_container" id="f_help">
                    <div id="f_header">HELP</div>
                    <div id="f_context">Help Center</div>
                    <div id="f_context">FAQs</div>
                    <div id="f_context">Privacy Policy</div>
                    <div id="f_context">Terms of use</div>
                </div>
                <div class="f_container" id="f_company">
                    <div id="f_header">COMPANY</div>
                    <div id="f_context"><a href="<?php echo $src ?>AboutUs.php" id="aboutus">About Us</a></div>
                    <div id="f_context">Our Team</div>
                </div>
                <div class="f_container" id="f_followUs">
                    <div id="f_header">FOLLOW US</div>
                    <div id="f_context">
                        <img src="<?php echo $img_src?>f_FB-icon.png" width="20px" height="20px">
                        Facebook
                    </div>
                    <div id="f_context">
                        <img src="<?php echo $img_src?>f_IG-icon.png" width="20px" height="20px">
                        Instagram
                    </div>
                    <div id="f_context">
                        <img src="<?php echo $img_src?>f_TW-icon.png" width="20px" height="20px">
                        Twitter
                    </div>
                </div>
            </div>
            <div class="bdy_flex_right">
                <div id="f_logo">
                    <img src="<?php echo $img_src?>f_Main-icon.png" width="340px">
                </div>
            </div> 
        </div>
        <div id="f_copyright">
            Copyright &#169; 2023. APU Web Solution Sdn. Bhd. All Rights Reserved.
        </div>  
    </div>
</div>