<?php
    include 'db_conn.php';

    if (isset($_POST['registerButton'])) {
        $username = $_POST['txtUsername'];
        $email = $_POST['txtEmail'];
        $phone = $_POST['Phone'];
        $password = password_hash($_POST['txtPassword'], PASSWORD_DEFAULT);
        $address = $_POST['txtAddress'];
        $state = $_POST['State'];

        $registerQuery = "INSERT INTO `seller`(`username`, `email`, `phone_no`, `password`, `address`, `state`) VALUES ('$username','$email','$phone','$password', '$address', '$state')";

        $checkQuery = "SELECT * FROM seller WHERE email = '$email'";
        $results = mysqli_query($conn, $checkQuery);

        if (mysqli_num_rows($results) > 0) {
            $err = "This email has been registered to an account.";
            session_start();
            $_SESSION['ERR_FLASH'] = $err;
            header('Location: ../admin/admin.php');
            mysqli_close($conn);
        }
        else {
            if (mysqli_query($conn, $registerQuery)) {
                echo "<script> alert('Seller has been registered successfully!');
                window.location.href='../admin/admin.php'; </script>";
            }
            else {
                echo "Something went wrong";
                header("Location: ../admin/registerSeller.php");
            }

            mysqli_close($conn);
        }
    }
?>