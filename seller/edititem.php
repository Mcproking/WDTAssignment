<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Item</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="../static/body.css">
    <link rel="stylesheet" href="../static/includes.css">
    <link rel="stylesheet" href="../static/seller/edititem.css">

</head>
<body>
    <?php
    include "../includes/header.php";
    ?>
    <div class="wrapper">
        <div class="edit-header">
            Edit Item
        </div>
        <div class="edit-box">
            <div class="edit-image">
                <img src="https://picsum.photos/id/300/500/500">
                <button class="choose-image-button" id="imgs-button">CHANGE IMAGE</button>
            </div>
            <div class="edit-details">
                <div class="edit-detail-box" id="item-name">
                    <div class="edit-item-name-box-header" id="edit-header"><label for="item-name">Item Name</label></div>
                    <input type="text" name="item-name" id="edit-textbox">
                </div>
                <div class="edit-detail-box" id="item-price">
                    <div class="edit-item-price-box-header" id="edit-header"><label for="item-price">Item Price</label></div>
                    <input type="text" name="item-price" id="edit-textbox">
                </div>
                <div class="edit-item-catagory-box" id="item-catagory">
                    <div class="edit-item-catagory-box-header" id="edit-header"><label for="item-catagory">Item Category</label></div>
                    <select name="item-catagory" id="edit-selectbox">
                        <option value="none" disabled selected hidden> Item Category </option>
                        <option value="">I1</option>
                        <option value="">I2</option>
                        <option value="">I3</option>
                        <option value="">I4</option>
                        <option value="">I5</option>
                    </select>
                </div>
                <div class="edit-item-quantity-box" id="item-quantity">
                    <div class="edit-item-quantity-box-header" id="edit-header"><label for="item-quantity">Item Quantity</label></div>
                    <div class="quantity-selector">
                        <input type="button" value="+" id="plus-button" for="quantity">
                        <input type="number" name="quantity" id="quantity" value="1" min="1" disabled>
                        <input type="button" value="-" id="minus-button" for="quantity">
                    </div>
                </div>
            </div>
        </div>
        <div class="edit-buttons">
            <a href="" id="cfm-change-btn">CONFIRM CHANGES</a>
            <a href="" id="cancel-btn">CANCEL</a>
        </div>
    </div>
    
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
    <?php
    include "../includes/footer.html";
    ?>
</body>
</html>