<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>item name</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="./static/body.css">
    <link rel="stylesheet" href="./static/includes.css">
    <link rel="stylesheet" href="./static/item.css">

</head>
<body>
    <?php
    session_start();
    if (empty($_SESSION['loggedin'])){
        if ($_SESSION['loggedin']){
            return;
        }else{
            header('Location: ./login.php');
        }
    }
    include "./includes/header.php";
    include "./includes/navbar.html";
    
    ?>
    <div class="wrapper">
        <?php
        include './php/db_conn.php';
        $id = $_GET['item'];
        $querry = "SELECT `name`, `price`,`quantity`, `img_path` FROM `item` WHERE `id` = ?";
        
        if(!empty($_GET["item"])){
            if($smst = $conn->prepare($querry)){
                $smst->bind_param("s", $_GET["item"]);
                $smst->execute();
                $smst->store_result();

                if($smst->num_rows > 0){
                    $smst->bind_result($name, $price, $quantity, $img_path);
                    $smst->fetch();
                    $img_path = substr($img_path,1);

                }
            }
        }
        ?>
        <div class="bdy_flex_left item-imgs">
            <img src="<?php echo $img_path ?>">
        </div>
        <div class="bdy_flex_right item-details">
            <div class="item-name">
                <?php echo $name ?>
            </div>
            <div class="item-price">
                Price: RM <?php echo $price ?>
            </div>
            <div class="quantity-selector">
                <input type="button" value="+" id="plus-button" for="quantity">
                <input type="number" name="quantity" id="quantity" value="1" min="1" max="<?php echo $quantity?>" disabled>
                <input type="button" value="-" id="minus-button" for="quantity">
            </div>
            <div class="button-add-to-cart">
                <button id="add-cart-button" onclick="add_to_cart();">Add to cart</button>
            </div>
        </div>
    </div>
    <?php
    include './includes/footer.php';
    ?>
    <script>
        var plus_btn = document.getElementById("plus-button");
        var quan = document.getElementById("quantity");
        var minus_btn =document.getElementById("minus-button");

        plus_btn.addEventListener("click", function(){
            if(quan.value == <?php echo $quantity;?>){
                quan.value = quan.value;
                
            }else{
            quan.value = Number(quan.value) + 1;
            }
        });

        minus_btn.addEventListener("click", function(){
            if(quan.value == "1"){
                return;
            }
            quan.value = quan.value - 1;
        });

        function add_to_cart(){
            window.location.href="./php/add_to_cart.php?id=<?php echo $id ?>&quantity=" + quan.value;
        }
    </script>
</body>
</html>