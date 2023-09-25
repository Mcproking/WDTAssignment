<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./static/body.css">
    <link rel="stylesheet" href="./static/header.css">
    <link rel="stylesheet" href="./static/login.css">
    <link rel="stylesheet" href="./static/footer.css">
</head>
<body>
    <div id="wrapper">
        <?php
        include 'includes/header.php';
        ?>
        <div id="flogin" class="flogin">
            <div id="textLogin">
                <h1>Login</h1>
            </div>
            <form action="" method="post">
                <div class="Username">
                    <label>Username</label>
                    <input type="text" name="txtName" id="" />     
                </div>
                <div class="Password">
                    <label>Password</label>
                    <input type="password" name="txtPassword" id="" />
                </div>
                <div id="button">
                    <button type="submit" value="Login" id="loginButton">Login</button>
                </div>
                <div class="redirect">
                    <a href="#" id="loginEmail">Login With Email</a>
                    <a href="">Register Here</a>
                    <a href="">Forgot Password?</a>
                </div>
            </form>
        </div>
        <?php
        include 'includes/footer.html';
        ?>
    </div>

</body>
</html>