<?php
include '../php/db_conn.php';

if (isset($_POST['confirmButton'])) {
    $SellerID = $_POST['SellerID'];
    $username = $_POST['txtUsername'];
    $email = $_POST['txtEmail'];
    $phone = $_POST['Phone'];
    $address = $_POST['txtAddress'];
    $state = $_POST['State'];

    $updateQuery = "UPDATE `seller` SET `username`='$username',`email`='$email',`phone_no`='$phone',`address`='$address',`state`='$state' WHERE id='$SellerID'";

    if (mysqli_query($conn, $updateQuery)) {
        echo "<script> alert('Seller information has been updated successfully!');
        window.location.href='./admin.php'; </script>";

    }
    else {
        echo "Something went wrong";
        header("Location: ./editSeller.php?SellerID='$SellerID'");
    }
}
    mysqli_close($conn);
?>