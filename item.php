<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>item name?</title>
    <link rel="stylesheet" href="./static/body.css">
    <link rel="stylesheet" href="./static/includes.css">
    <link rel="stylesheet" href="./static/item.css">

</head>
<body>
    <?php
    include './includes/header.php';
    include './includes/navbar.html';
    ?>
    <div class="wrapper">
        <div class="bdy_flex_left">
            <img src="https://picsum.photos/300" alt="">
        </div>
        <div class="bdy_flex_right item-details">
            <div class="item-name">
                {{ item names}}
            </div>
            <div class="item-price">
                Price: {{ item price }}
            </div>
            <div class="quantity-selector">
                <input type="button" value="+" id="plus-button" for="quantity">
                <input type="number" name="quantity" id="quantity" value="1" min="1" disabled>
                <input type="button" value="-" id="minus-button" for="quantity">
            </div>
            <div class="button-add-to-cart">
                <button id="add-cart-button" href=""></button>Add to cart</button>
            </div>
        </div>
    </div>
    <?php
    include './includes/footer.html';
    ?>
    <script>
        var plus_btn = document.getElementById("plus-button");
        var quan = document.getElementById("quantity");
        var minus_btn =document.getElementById("minus-button");

        plus_btn.addEventListener("click", function(){

            quan.value = Number(quan.value) + 1;
        });

        minus_btn.addEventListener("click", function(){
            if(quan.value == "1"){
                return;
            }
            quan.value = quan.value - 1;
        });
    </script>
</body>
</html>