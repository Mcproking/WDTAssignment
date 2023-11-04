<?php
    include "../php/db_conn.php";

    $CustomerID = $_GET['customerid'];

    $deleteQuery1 = "DELETE FROM `cust_address` WHERE cust_id='$CustomerID'";
    $deleteQuery2 = "DELETE FROM `customer` WHERE id='$CustomerID'";

    if (mysqli_query($conn, $deleteQuery1)) {
        mysqli_query($conn, $deleteQuery2);
        echo "<script> alert('Customer was deleted successfully!');
        window.location.href='./customerList.php'; </script>";
    }
    else {
        echo "Something went wrong.";
        header("Location: ./customerList.php");
    }
?>