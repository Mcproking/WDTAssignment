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
        <?php if(session_status() != PHP_SESSION_ACTIVE){
                echo '<div id="user">&nbsp;</div>';
        }
        else{
            echo '<div id="login">&nbsp;</div>';
        }
        ?>
    </div>
</div>
