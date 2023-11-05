<?php
    session_start();
    include 'db_conn.php';

    if (isset($_POST["addButton"])) {
        $cust_id = $_SESSION['id'];
        $address = $_POST["txtAddress"];
        $state = $_POST["State"];

        $addQuery = "INSERT INTO `cust_address`(`cust_id`, `address`, `state`) VALUES ('$cust_id','$address','$state')";

        if (mysqli_query($conn, $addQuery)) {
            echo "<script> alert('Address has been added successfully!');
            window.location.href='../index.php'; </script>";
        }
        else {
            echo "Something went wrong";
            header("Location: ../addAddress.php");
        }
        mysqli_close($conn);
    }

?>