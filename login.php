<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./static/body.css">
    <link rel="stylesheet" href="./static/header.css">
    <link rel="stylesheet" href="./static/login.css">
    <link rel="stylesheet" href="./static/footer.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
    <script type="text/javascript">
        var loginWith = "Username"
        function loginSwitch(){
            if (loginWith == "Username"){
                console.log("swtich from user");
                document.getElementById('User').innerHTML = '<label>Email</label> <input type="email" name="txtName" id="inputUser" />';
                document.getElementById('Switch').innerHTML = '<a onclick="loginSwitch(); return false">Login With Username</a>';
                loginWith = "Email"
            }else if (loginWith == "Email")
            {
                console.log("switch from email")
                document.getElementById('User').innerHTML = '<label>Username</label> <input type="text" name="txtName" id="inputUser" />';
                document.getElementById('Switch').innerHTML = '<a onclick="loginSwitch(); return false">Login With Email</a>';
                loginWith = "Username"
            }

        }
    </script>
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
                <div class="Username" id="User">
                    <label for="inputUser">Username</label>
                    <input type="text" name="txtName" id="inputUser" />    
                </div>
                <div class="Password" id="Pass">
                    <label for="inputPassword">Password</label>
                    <input type="password" name="txtPassword" id="inputPassword" />
                </div>
                <div id="button">
                    <button type="submit" value="Login" id="loginButton">Login</button>
                </div>
                <div class="redirect">
                    <div id="Switch"><a onclick="loginSwitch(); return false">Login With Email</a></div>
                    <div href="#">Register Here</div>    
                    <div href="#">Forgot Password?</div>
                </div>
            </form>
        </div>
        <?php
        include 'includes/footer.html';
        ?>
    </div>

</body>
</html>