<?php
    include "../php/db_conn.php";

    $SellerID = $_GET['SellerID'];

    $deleteQuery = "DELETE FROM `seller` WHERE id='$SellerID'";

    if (mysqli_query($conn, $deleteQuery)) {
        echo "<script> alert('Seller was deleted successfully!');
        window.location.href='./sellerList.php'; </script>";
    }
    else {
        echo "Something went wrong.";
        header("Location: ./sellerList.php");
    }
?>