<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="./static/body.css">
    <link rel="stylesheet" href="./static/includes.css">
    <link rel="stylesheet" href="./static/shoppingcart.css">
</head>
<body>
    <?php 
    include "./includes/header.php";
    include "./includes/navbar.html";
    ?>
    <div class="wrapper">
        <div class="shoppingcart-header">
            <div class="header-text" id="header-item">Item</div>
            <div class="header-text" id="header-seller">Seller</div>
            <div class="header-text" id="header-price">Price</div>
            <div class="header-text" id="header-quantity">Quantity</div>
            <div class="header-text" id="header-total-price">Total Price</div>
        </div>
        <div class="shopping-cart">
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

            <div class="shoppingcart-item">
                <div class="item-text" id="item-item">
                    <input type="checkbox" name="id1" id="chkbox" value="id1">
                    <img src="https://picsum.photos/seed/a/150">
                    <label for="id1">Item Name</label>
                </div>
                <div class="item-text" id="item-seller">Seller</div>
                <div class="item-text" id="item-price">Price</div>
                <div class="item-text" id="item-quantity">Quantity</div>
                <div class="item-text" id="item-total-price">Total Price</div>
            </div>
            
            <div class="shoppingcart-item">
                <div class="item-text" id="item-item">
                    <input type="checkbox" name="id2" id="chkbox" value="id2">
                    <img src="https://picsum.photos/seed/b/150">
                    <label for="id2">Item Name</label>
                </div>
                <div class="item-text" id="item-seller">Seller</div>
                <div class="item-text" id="item-price">Price</div>
                <div class="item-text" id="item-quantity">Quantity</div>
                <div class="item-text" id="item-total-price">Total Price</div>
            </div>

            <div class="shoppingcart-item">
                <div class="item-text" id="item-item">
                    <input type="checkbox" name="id3" id="chkbox" value="id3">
                    <img src="https://picsum.photos/seed/c/150">
                    <label for="id3">Item Name</label>
                </div>
                <div class="item-text" id="item-seller">Seller</div>
                <div class="item-text" id="item-price">Price</div>
                <div class="item-text" id="item-quantity">Quantity</div>
                <div class="item-text" id="item-total-price">Total Price</div>
            </div>

            <div class="shoppingcart-item">
                <div class="item-text" id="item-item">
                    <input type="checkbox" name="id4" id="chkbox" value="id4">
                    <img src="https://picsum.photos/seed/d/150">
                    <label for="id4">Item Name</label>
                </div>
                <div class="item-text" id="item-seller">Seller</div>
                <div class="item-text" id="item-price">Price</div>
                <div class="item-text" id="item-quantity">Quantity</div>
                <div class="item-text" id="item-total-price">Total Price</div>
            </div>

            <div class="shoppingcart-item">
                <div class="item-text" id="item-item">
                    <input type="checkbox" name="id5" id="chkbox" value="id5">
                    <img src="https://picsum.photos/seed/e/150">
                    <label for="id5">Item Name</label>
                </div>
                <div class="item-text" id="item-seller">Seller</div>
                <div class="item-text" id="item-price">Price</div>
                <div class="item-text" id="item-quantity">Quantity</div>
                <div class="item-text" id="item-total-price">Total Price</div>
            </div>
        </div>
        <hr style="background-color:black; height:1px; width:100%;">
        <div class="shoppingcart-options">
            <div class="bdy_flex_left">
                <button class="delete-button" onclick="delete_items();">DELETE SECTION</button>
            </div>
            <div class="bdy_flex_right right-option">
                <div class="total-price">RM 00.00</div>
                <a href="" class="checkout-button">Check out</a>
            </div>
        </div>
    </div>
    <?php
    include "./includes/footer.html";
    ?>
    <script>
        let chkboxs = document.querySelectorAll("[id='chkbox']");
        var items = new Array();
        function delete_items(){
            items = [];
            for(i = 0; i < chkboxs.length; i++){
                if(chkboxs[i].checked){
                    items.push(chkboxs[i]);
                }
            }
            for(i = 0; i < items.length; i++){
                items[i].parentElement.parentElement.remove();
            }
            // console.log(items);
        }
        
    </script>
</body>
</html>