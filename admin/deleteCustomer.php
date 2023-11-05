<?php
    include "../php/db_conn.php";

    $CustomerID = $_GET['customerid'];

    $deleteQuery = "DELETE FROM `customer` WHERE id='$CustomerID'";

    if (mysqli_query($conn, $deleteQuery)) {
        echo "<script> alert('Customer was deleted successfully!');
        window.location.href='./customerList.php'; </script>";
    }
    else {
        echo "Something went wrong.";
        header("Location: ./customerList.php");
    }
?>