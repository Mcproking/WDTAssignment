<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../static/body.css">
    <link rel="stylesheet" href="../static/header.css">
    <link rel="stylesheet" href="../static/admin/admin.css">
</head>
<body>
    <?php
        include '../includes/header.php';
        include '../php/db_conn.php';
        $queryCustomer = "SELECT COUNT(CustomerID) FROM Customer GROUP BY CustomerID";
        $querySeller = "SELECT COUNT(SellerID) FROM Customer GROUP BY SellerID";
        $queryItem = "SELECT COUNT(ItemID) FROM Customer GROUP BY ItemID";
    ?>

    <div id="wrapper">
        <div id="title" align="center">
            <h1>Admin Dashboard</h1>
        </div>

        <div id="stats">
            <div id="customers" class="box">
                <p><img src="../imgs/customer.png" alt="Customer" height="50" width="50" id="imgCustomer" class="image">Total Number Of Customers: <?php echo $queryCustomer;?></p>
            </div>

            <div id="sellers" class="box">
                <p><img src="../imgs/seller.png" alt="Seller" height="50" width="50" id="imgSeller" class="image">Total Number Of Sellers: <?php    echo $querySeller; ?></p>
            </div>

            <div id="products" class="box">
                <p><img src="../imgs/item1.png" alt="Item" height="50" width="50" id="imgItem" class="image">Total Number Of Items:<?php echo   $queryItem; ?></p>
            </div>
        </div>

        <div id="options">
            <button onclick="window.location.href='manageUser.php'" id="users" class="Button">Manage Users</button>
            <button onclick="window.location.href='manageItem.php'" id="items" class="Button">Manage Items</button>
        </div>
    </div>

    <?php
        include '../includes/footer.html';
    ?>
</body>
</html>