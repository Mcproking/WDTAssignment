<?php
include "./db_conn.php";

session_start();
$userID = $_SESSION["id"];
$itemID = $_GET["id"];
$quantity = $_GET['quantity'];

$item = $itemID.','.$quantity;
if(empty($_SESSION['cart'])){
    $_SESSION['cart'] = array();
    array_push($_SESSION['cart'], $item);
    echo "<script> alert('Item added successfully!');
                window.location.href='../shoppingcart.php'; </script>";
}else{
    array_push($_SESSION['cart'], $item);
    echo "<script> alert('Item added successfully!');
                window.location.href='../shoppingcart.php'; </script>";
}


// print_r($_SESSION);




// echo 'user'.$userID;
// echo 'item'.$itemID;
// echo 'quan'.$quantity;
// echo 'item'.$item;
?>