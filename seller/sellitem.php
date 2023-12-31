<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Item</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="../static/body.css">
    <link rel="stylesheet" href="../static/includes.css">
    <link rel="stylesheet" href="../static/seller/sellitem.css">

    <style>
        html {
            background-image: url(../imgs/admin_imgs/registerSeller.jpg);
        }

        .h_box {
            display: none;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        include '../includes/header.php';
    ?>

    <div id="wrapper">

        <div class="box">
            <div id="sellitem" class="sellitem">
                <div id=textsellitem> <!--Title-->
                    <h1 id="sellitem_header">Sell Item</h1>
                </div>
                <form action="../php/sell_item.php?id=<?php echo $_SESSION['id']?>" method="post" id="Form" enctype="multipart/form-data">
                    <div id="ItemName">
                        <label for="ItemName">Item Name<span style="color:red">*</span> </label><br>
                        <input type="text" name="txtItemName" id="ItemName" class="input" autofocus required>
                    </div>

                    <div id="ItemPrice">
                        <label for="ItemPrice">Item Price (RM)<span style="color:red">*</span> </label><br>
                        <input type="number" name="txtItemPrice" id="ItemPrice" class="input" onchange="(function(el){el.value=parseFloat(el.value).toFixed(2);})(this)" value="0.00" min="0.00" step="0.50" required>
                    </div>

                    <div id="ItemCategory">
                        Item Category
                        <select name="ItemCategories" id="ItemCategories" required>
                            <option value="" disabled selected hidden>--Select Category--</option>
                            <option value="Fruits">Fruits</option>
                            <option value="Vegetables">Vegetables</option>
                            <option value="Meat">Meat</option>
                            <option value="Dairy">Dairy</option>
                            <option value="TinCanned">Tin Canned</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>

                    <div id="ItemQuantity">
                        <label for="ItemQuantity">Item Quantity<span style="color:red">*</span> </label><br>
                        <input type="number" name="txtItemQuantity" id="ItemQuantity" class="input" min="1" value="1" step="1" required>
                    </div>   

                    <div id="ItemImage">
                        <label for="ItemImage">Item Image<span style="color:red">*</span> </label><br>
                        <input type="file" name="txtItemImage" id="ItemImage" class="input" accept="image/png, image/jpg, image/jpeg" required>
                    </div>   
                    
                    <div id="Field">
                        <h4>* indicates a required field</h4>
                    </div>
                                       
                    <div id="Buttons">
                        <button type="submit" value="Confirm" id="confirmButton" name="confirmButton">Confirm</button>
                        <button type="button" value="Cancel" id="cancel" onclick="window.location='./index.php'">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
        include '../includes/footer.php';
    ?>
</body>
</html>