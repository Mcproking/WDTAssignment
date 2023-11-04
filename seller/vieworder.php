<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Order</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="../static/body.css">
    <link rel="stylesheet" href="../static/includes.css">
    <link rel="stylesheet" href="../static/seller/orderitem.css">
</head>
<body>
    <?php
    include "../includes/header.php";
    ?>
    <div class="wrapper">
        <div class="header-text">View Order</div>
        <div class="customer-order">
            <div class="customer-details">
                <div id="customer-name">dsadsa</div>
                <div id="customer-address">fasdfffff</div>
            </div>
            <div class="order-item">
                <img src="https://picsum.photos/seed/abc/150/150">
                <div class="order-item-text" id="item-name">hi</div>
                <div class="order-item-text" id="item-price">0220</div>
                <div class="order-item-text" id="item-quantity">30</div>
                <div class="order-item-text" id="item-total">2003020</div>
            </div>
            <div class="order-item">
                <img src="https://picsum.photos/seed/bca/150/150">
                <div class="order-item-text" id="item-name">hi</div>
                <div class="order-item-text" id="item-price">0220</div>
                <div class="order-item-text" id="item-quantity">30</div>
                <div class="order-item-text" id="item-total">2003020</div>
            </div>
            <div class="order-options">
                <a href="" class="bdy_flex_left button" id="cancel-order">CANCEL ORDER</a>
                <div class="bdy_flex_right">
                    <div id="order-total">RM23.23</div>
                    <a href="" class="button" id="fulfill-order" >FULFILL ORDER</a>
                </div>
            </div>
        </div>
        <div class="customer-order">
            <div class="customer-details">
                <div id="customer-name">dsadsa</div>
                <div id="customer-address">fasdfffff</div>
            </div>
            <div class="order-item">
                <img src="https://picsum.photos/seed/cab/150/150">
                <div class="order-item-text" id="item-name">hi</div>
                <div class="order-item-text" id="item-price">0220</div>
                <div class="order-item-text" id="item-quantity">30</div>
                <div class="order-item-text" id="item-total">2003020</div>
            </div>
            <div class="order-item">
                <img src="https://picsum.photos/seed/aaa/150/150">
                <div class="order-item-text" id="item-name">hi</div>
                <div class="order-item-text" id="item-price">0220</div>
                <div class="order-item-text" id="item-quantity">30</div>
                <div class="order-item-text" id="item-total">2003020</div>
            </div>
            <div class="order-options">
                <a href="" class="bdy_flex_left button" id="cancel-order">CANCEL ORDER</a>
                <div class="bdy_flex_right">
                    <div id="order-total">RM23.23</div>
                    <a href="" class="button" id="fulfill-order" >FULFILL ORDER</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>