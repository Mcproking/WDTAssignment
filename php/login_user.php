<?php

session_start();
include "db_conn.php";

$sql = "SELECT `username`, `email`, `password` FROM `user` WHERE `username` = ?'";

if ($main = $conn -> prepare($sql)) {
    $main -> bind_param("s", $_POST["txtName"]);
    $main -> execute();
    $main -> store_result();

    if ($main -> num_rows() > 0) {
        $main -> bind_result($username, $email, $pass);
        $main -> fetch();

        if (password_verify($_POST["txtPassword"], $pass)) {
            if (session_status() == PHP_SESSION_ACTIVE) {
                session_regenerate_id();
            }
            $_SESSION['loggedin'] = True;
                $_SESSION['name'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $pass;
                header('Location: ../admin/index.php');
            }
            else {
                header('Location: ../admin/');
                $err = 'Login Error';
                $_SESSION['FLASH'] = $err;
            }
    }
    else {
        header('Location: ../admin/');
        $err = 'Login Error';
        $_SESSION['FLASH'] = $err;
    }
    $main -> close();
    $conn -> close();
}
?>