<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./php/admin/register.php" method="POST">
        username
        <input type="text" name="txtName" id="inputUser" />     
        <br>
        Email
        <input type="email" name="txtemail" id="inputemail">
        <br>
        password
        <input type="password" name="txtPassword" id="inputPassword" />
        <br>
        <button type="submit" value="Login" id="loginButton">Login</button>
    </form>
</body>
</html>