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
    include "../includes/header.php";
    ?>
    <div class="wrapper">
        <div class="home-header">
            What would you like to do?
        </div>
        <div class="home-menu-box">
            <a href="">
                <div class="box" id="sell-item">
                    <img src="../imgs/seller_imgs/sell-item-icon.png">
                    <div class="textbox">
                        <div class="box-header">Sell Item</div>
                        <div class="box-text">Add a Product</div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="box" id="item-list">
                    <img src="../imgs/seller_imgs/item-list-icon.png">
                    <div class="textbox">
                        <div class="box-header">Item List</div>
                        <div class="box-text">Edit or Remove List</div>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="box" id="view-order">
                    <img src="../imgs/seller_imgs/view-order-icon.png">
                    <div class="textbox">
                        <div class="box-header">View Order</div>
                        <div class="box-text">Check Customer Orders</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <?php
    include "../includes/footer.html";
    ?>
</body>
</html>