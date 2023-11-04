<?php
    include 'db_conn.php';
    if (isset($_POST['confirmButton'])) {
        $id = $_POST['sellerID'];
        $name = $_POST['txtItemName'];
        $price = $_POST['txtItemPrice'];
        $category = $_POST['ItemCategories'];
        $quantity = $_POST['txtItemQuantity'];
        $filename = $_FILES['txtItemImage']['name'];
        move_uploaded_file($_FILES['txtItemImage']['tmp_name'],'../imgs/item_imgs/'.$filename); 
        $filepath="../imgs/item_imgs/".$filename;
        echo $filepath;
        $sellQuery = "INSERT INTO `item`(`sellerID`,`name`, `price`, `category`, `quantity`, `img_path`) VALUES ('$id','$name','$price','$category','$quantity', '$filepath')";

        $checkQuery = "SELECT * FROM item WHERE name = '$name'";
        $results = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($results) > 0) {
             $err = "This item has already been added.";
             session_start();
             $_SESSION['ERR_FLASH'] = $err;
             header('Location: ../seller/index.php');
             mysqli_close($connection);
         }
         else {
             if (mysqli_query($conn, $sellQuery)) {
                 echo "<script> alert('Item has been added successfully!');
                 window.location.href='../seller/index.php'; </script>";
             }
             else {
                 echo "Something went wrong";
                 header("Location: ../seller/sellitem.php");
             }

             mysqli_close($conn);
        }
    }
?>