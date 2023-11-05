<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="../static/body.css">
    <link rel="stylesheet" href="../static/includes.css">
    <link rel="stylesheet" href="../static/seller/index.css">
</head>
<body>
    <?php
    session_start();
    include "../includes/header.php";
    ?>
    <div class="wrapper">
        <div class="home-header">
            What would you like to do?
        </div>
        <div class="home-menu-box">
            <a class="box" id="sell-item" href="./sellitem.php">
                <img src="../imgs/seller_imgs/sell-item-icon.png">
                <div class="textbox">
                    <div class="box-header">Sell Item</div>
                    <div class="box-text">Add a Product</div>
                </div>
            </a>
            <!-- this prob uses daryl crated one-->
            <!-- <a class="box" id="item-list" href="./edititem.php">
                <img src="../imgs/seller_imgs/item-list-icon.png">
                <div class="textbox">
                    <div class="box-header">Item List</div>
                    <div class="box-text">Edit or Remove List</div>
                </div>
            </a>


            <a class="box" id="view-order" href="./vieworder.php">
                <img src="../imgs/seller_imgs/view-order-icon.png">
                <div class="textbox">
                    <div class="box-header">View Order</div>
                    <div class="box-text">Check Customer Orders</div>
                </div>
            </a> -->
        </div>
    </div>
    <?php
    include "../includes/footer.php";
    ?>
</body>
</html>