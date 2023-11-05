<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter">
    <link rel="stylesheet" href="../static/body.css">
    <link rel="stylesheet" href="../static/includes.css">
    <link rel="stylesheet" href="../static/admin/admin.css">
    <link rel="stylesheet" href="../static/admin/sidenav.css">

</head>
<body>
    <?php
    session_start();
    include "../includes/header.php";
    
    ?>

    <div class="wrapper">
        <div class="side-nav">
            <div class="nav-button" style="font-size:50px;" onclick="opennav();">&#9776;</div>
            <?php
            include "./sidenav.html";
            ?>
        </div>
        <div class="menu">
            <a class="menu-box" id="register-seller" href="./registerSeller.php">
                <img src="../imgs/admin_imgs/register-seller-icon.png" alt="">
                <div class="textbox">
                    <div id="text-header">Register Seller</div>
                    <div id="text">Add a Seller</div>
                </div>
            </a>
            <a class="menu-box" id="seller-list" href="./sellerList.php">
                <img src="../imgs/admin_imgs/seller-list-icon.png" alt="">
                <div class="textbox">
                    <div id="text-header">Seller List</div>
                    <div id="text">Edit or Delete Seller</div>
                </div>
            </a>
            <a class="menu-box" id="customer-list" href="./customerList.php">
                <img src="../imgs/admin_imgs/customer-list-icon.png" alt="">
                <div class="textbox">
                    <div id="text-header">Customer List</div>
                    <div id="text">View and Delete Customer</div>
                </div>
            </a>
            <a class="menu-box" id="item-list" href="./searchItem.php">
                <img src="../imgs/admin_imgs/items-list-icon.png" alt="">
                <div class="textbox">                
                    <div id="text-header">Items</div>
                    <div id="text">Search for an Item.</div>
                </div>
            </a>
        </div>
    </div>
    <script>
        var openpx = 0;

        var elementItem = document.getElementById("nav");
        function opennav(){
            elementItem.classList.toggle("navopen");
            elementItem.classList.remove("navclose");
        }
        function closenav(){
            elementItem.classList.toggle("navclose");
            elementItem.classList.remove("navopen");
        }
    </script> 
</body>
</html>