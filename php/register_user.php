<?php
include "./db_conn.php";

// get all the post
// then uses the how the login is
// if the user got type both address and state then insert it after the customer
// same method as the user

$username = $_POST['txtUsername'];
$password = password_hash($_POST['txtPassword'],PASSWORD_DEFAULT);
$email = $_POST['txtEmail'];
$phone = $_POST['Phone'];
$gender = $_POST['Gender'];
$dob = $_POST['txtDOB'];

$address = $_POST['txtAddress'];
$state = $_POST['State'];

$sql_ChkAccount = "SELECT `email` FROM `customer` WHERE `email` = ?";
$sql_AddAccount = "INSERT INTO `customer`(`username`, `password`, `email`, `phone_no`, `gender`, `dob`, `address`,`state`) VALUES (?,?,?,?,?,?,?,?)";

if($main = $conn ->prepare($sql_ChkAccount)){
    $main -> bind_param("s",$email);
    $main -> execute();
    $main -> store_result();

    if($main -> num_rows() > 0){
        $err = "Email associated already have an account.";
        session_start();
        $_SESSION['ERR_FLASH'] = $err;
        header('Location: ../register.php');
        $main -> close(); 
        $conn -> close();
    }

    if($main = $conn -> prepare($sql_AddAccount)){
        if($main = $conn -> prepare($sql_AddAccount)){
            $main -> bind_param("ssssssss",$username,$password,$email,$phone,$gender,$dob,$address,$state);
            $main -> execute();
            $main -> close();
            $conn -> close();
            header("Location:../login.php");
        }
    }
    
}

// echo $username;
// echo '<br>';
// echo $password;
// echo '<br>';
// echo $email;
// echo '<br>';
// echo $phone;
// echo '<br>';
// echo $gender;
// echo '<br>';
// echo $dob;
// echo '<br>';

if(!empty($address) or !empty($state)){
    echo $address;
    echo '<br>';
    echo $state;
}