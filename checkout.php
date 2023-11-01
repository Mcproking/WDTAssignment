<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
    <link rel="stylesheet" href="./static/body.css">
    <link rel="stylesheet" href="./static/includes.css">
    <link rel="stylesheet" href="./static/checkout.css">
</head>
<body>
    <?php
    include "./includes/header.php";
    include "./includes/navbar.html";
    ?>
    <div class="wrapper">
        <div class="checkout-header">
            <div class="header-text" id="header-item">Item</div>
            <div class="header-text" id="header-seller">Seller</div>
            <div class="header-text" id="header-price">Price</div>
            <div class="header-text" id="header-quantity">Quantity</div>
            <div class="header-text" id="header-total-price">Total Price</div>
        </div>
        <div class="checkout">
            <!-- for sql uses -->
            <!-- <div class="shoppingcart-item">
                <div class="item-text" id="item-item">
                    <input type="checkbox" name="id1" id="id1" value="id1">
                    <img src="https://picsum.photos/150">
                    <label for="id1">Item Name</label>
                </div>
                <div class="item-text" id="item-seller">Seller</div>
                <div class="item-text" id="item-price">Price</div>
                <div class="item-text" id="item-quantity">Quantity</div>
                <div class="item-text" id="item-total-price">Total Price</div>
            </div> -->

            <div class="checkout-item">
                <div class="item-text" id="item-item">
                    <img src="https://picsum.photos/seed/a/150">
                    <label for="id1">Item Name</label>
                </div>
                <div class="item-text" id="item-seller">Seller</div>
                <div class="item-text" id="item-price">Price</div>
                <div class="item-text" id="item-quantity">Quantity</div>
                <div class="item-text" id="item-total-price">Total Price</div>
            </div>
            <div class="checkout-item">
                <div class="item-text" id="item-item">
                    <img src="https://picsum.photos/seed/b/150">
                    <label for="id1">Item Name</label>
                </div>
                <div class="item-text" id="item-seller">Seller</div>
                <div class="item-text" id="item-price">Price</div>
                <div class="item-text" id="item-quantity">Quantity</div>
                <div class="item-text" id="item-total-price">Total Price</div>
            </div>
            <div class="checkout-item">
                <div class="item-text" id="item-item">
                    <img src="https://picsum.photos/seed/c/150">
                    <label for="id1">Item Name</label>
                </div>
                <div class="item-text" id="item-seller">Seller</div>
                <div class="item-text" id="item-price">Price</div>
                <div class="item-text" id="item-quantity">Quantity</div>
                <div class="item-text" id="item-total-price">Total Price</div>
            </div>
            <div class="final-fee">
                <div class="bdy_flex_left final-header">
                    <div id="shipping-fee-text">Shipping Fee</div>
                    <div id="fee-text">Final Fee</div>
                </div>
                <div class="bdy_flex_right final-amount">
                    <div id="shipping-fee-amount">RM 0.00</div>
                    <div id="fee-amount">RM 0.00</div>
                </div>
            </div>
        </div> 
        <div class="final-section">
            <div class="final-selector" style="border-bottom:solid; border-width:2px;">
                <div class="selector-text" id="address-drop">
                    <div class="text-header"><label for="address">Delivery Address</label></div>
                    <select name="address" id="address-selector">
                        <option value="none" selected disabled hidden>-- Select Address --</option>
                        <!-- for sql use -->
                        <!-- <option value="{{ address id }}">{{ address text }}</option> -->
                        <option value="">my Vir</option>
                        <option value="">my As</option>
                        <option value="">my Bal</option>
                        <option value="">my Mout</option>
                    </select>
                </div>
                <div class="selector-text" id="payment-drop">
                    <div class="text-header"><label for="payment">Payment Method</label></div>
                    <select name="payment" id="payment-selector">
                        <option value="none" selected disabled hidden>-- Select Payment Method--</option>
                        <option value="">May</option>
                        <option value="">Private</option>
                        <option value="">Palbud</option>
                        <option value="">oshit</option>
                    </select>
                </div>
            </div>
            <div class="final-comfirmation">
                <div class="final-comfirmation-fee">
                    <div id="final-comfirmation-header">Final Price:</div>
                    <div id="final-comfirmation-price">RM 0.00</div>
                </div>
                <a class="final-comfirmation-button" href="">PLACE ORDER</a>
            </div>
        </div>
    </div>
    <?php
    include "./includes/footer.html";
    ?>
</body>
</html>