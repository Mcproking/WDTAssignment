<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../static/body.css">
    <link rel="stylesheet" href="../static/admin/index.css">
    <link rel="stylesheet" href="../static/footer.css">
    <?php
        session_start();

        // check if the session is login alrdy
        if(!empty($_SESSION['loggedin']) and $_SESSION['auth'] == 'Admin'){
            header('Location: ../admin/admin.php');
        }
    ?>
</head>
<body>
    <div id="wrapper">
        <div id="flogin" class="flogin">
            <div id="textLogin">
                <h1>Admin Login</h1>
            </div>
            <form action="../php/login_admin.php" method="post">
                <div class="Username" id="User">
                    <label>Username</label>
                    <input type="text" name="txtName" id="inputUser" />     
                </div>
                <div class="Password" id="Pass">
                    <label>Password</label>
                    <input type="password" name="txtPassword" id="inputPassword" />
                </div>
                <div id="button">
                    <button type="submit" value="Login" id="loginButton">Login</button>
                </div>
            </form>
            <?php
                if(!empty($_SESSION['FLASH'])){
                    echo'<div id="error">'.$_SESSION['FLASH'].'</div>';
                    $_SESSION['FLASH'] = '';
                }
            ?>
        </div>
    </div>

</body>
</html>