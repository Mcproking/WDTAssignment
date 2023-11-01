<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="./static/body.css">
    <link rel="stylesheet" href="./static/includes.css">
    <link rel="stylesheet" href="./static/login.css">
    <style>
        .h_right_container{
            display: none;
        }
    </style>
</head>
<body>
    <?php
    include "./includes/header.php";
    ?>
    <div class="wrapper">
        <div class="bdy_flex_left content-left">
            <div class="login">
                <div id="login-header">Login</div>
                <div id="login-form">
                    <form name="login" action="" method="post">
                        <label for="email" id="form-header">Email</label>
                        <input type="email" name="email-login" id="email" placeholder="you@example.com">
                        <label for="password" id="form-header">Password</label>
                        <input type="password" name="pass-login" id="password" placeholder="Enter Your Password">
                        <input type="submit" value="Login" id="button-box">
                    </form>
                </div>
                <div id="login-no-account">
                    Don't have an account yet? <a href="./Register.php">Register Here.</a>
                </div>
            </div>
        </div>
        <div class="bdy_flex_right content-right">
            <img src="./imgs/login_imgs/side-img.png" >
        </div>
    </div>
    <?php
    include "./includes/footer.html";
    ?>
</body>
</html>