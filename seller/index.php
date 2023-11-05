<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php
        session_start();

        // check if the session is login alrdy
        if(!empty($_SESSION['loggedin']) and $_SESSION['auth'] == 'Seller'){
            header('Location: ../seller/seller.php');
        }
    ?>

</head>
<body>

<<<<<<< Updated upstream

            <a class="box" id="view-order" href="./vieworder.php">
                <img src="../imgs/seller_imgs/view-order-icon.png">
                <div class="textbox">
                    <div class="box-header">View Order</div>
                    <div class="box-text">Check Customer Orders</div>
                </div>
            </a>
        </div>
    </div>
    <?php
    include "../includes/footer.html";
    ?>
=======
    <form action="../php/login_staff.php" method="POST">
        <label for="email" id="form-header">Email</label>
        <input type="email" name="email-login" id="email" placeholder="you@example.com">
        <label for="password" id="form-header">Password</label>
        <input type="password" name="pass-login" id="password" placeholder="Enter Your Password">
        <input type="submit" value="Login" id="button-box">
    </form>
>>>>>>> Stashed changes
</body>
</html>