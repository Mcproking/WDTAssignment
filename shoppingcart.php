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
        <div class="shoppingcart-header">
            <div class="header-text" id="header-item">Item</div>
            <div class="header-text" id="header-seller">Seller</div>
            <div class="header-text" id="header-price">Price</div>
            <div class="header-text" id="header-quantity">Quantity</div>
            <div class="header-text" id="header-total-price">Total Price</div>
        </div>
        <div class="shopping-cart">
            <?php
            include './php/db_conn.php';
            $cartprice = 0;
            $items = array();
            $itemID = array();  
            $itemquan = array();
            if(!empty($_SESSION['cart'])){
                for ($i = 0; $i < count($_SESSION['cart']);$i++){
                    $temp = $_SESSION['cart'][ $i ];
                    $item = explode(',', $temp);
                    array_push($items, $item);
                }
                
                for ($i = 0; $i < count($items); $i++){
                   array_push($itemID, $items[$i][0]);
                }
                
                for ($i = 0; $i < count($items); $i++){
                    array_push($itemquan,$items[$i][1]);
                }
                
    
    
                $itemID = join(",", $itemID);
    
                // echo $itemID;
                $querry = "SELECT item.id, item.name, item.price, item.img_path, seller.username FROM `item` LEFT JOIN seller on item.sellerID = seller.id WHERE item.id in ($itemID)";
                $getItems = mysqli_query($conn, $querry);
                $x = 0;
                    while ($row_data = mysqli_fetch_array($getItems)){
                        // print_r($row_data);
                        $total_price = $row_data["price"] * $itemquan[$x];
                        $img_path = substr($row_data["img_path"],1);
                        $html = '<div class="shoppingcart-item">
                        <div class="item-text" id="item-item">
                            <input type="checkbox" name="id1" id="'.$row_data['id'].'" value="id1">
                            <img src="'.$img_path.'">
                            <label for="id1">'.$row_data['name'].'</label>
                        </div>
                        <div class="item-text" id="item-seller">'.$row_data['username'].'</div>
                        <div class="item-text" id="item-price">'.$row_data['price'].'</div>
                        <div class="item-text" id="item-quantity">'.$itemquan[$x].'</div>
                        <div class="item-text" id="item-total-price">'.$total_price.'</div>
                    </div>';
                        echo $html;
                        $cartprice = $cartprice + $total_price;
                        $x++;
                    }
    
            }
            else{
                echo 'No Record';
            }
            
            
            
            ?>
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
        </div>
        <hr style="background-color:black; height:1px; width:100%;">
        <div class="shoppingcart-options">
            <div class="bdy_flex_left">
                <button class="delete-button" onclick="delete_items();">DELETE SECTION</button>
            </div>
            <div class="bdy_flex_right right-option">
                <div class="total-price">RM <?php echo number_format((float)$cartprice, 2, '.', '');?></div>
                <button href="./checkout.php" class="checkout-button">Check out</button>
            </div>
        </div>
    </div>
    <?php
    include "./includes/footer.php";
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