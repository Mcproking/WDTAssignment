<?php

// connection to DB
session_start();
include "db_conn.php";

$sql = "SELECT `id`, `username`, `password`, `email` FROM `customer` WHERE `email`= ?";

if ($smst = $conn -> prepare($sql)) {
    $smst -> bind_param("s", $_POST["email-login"]);
    $smst -> execute();
    $smst -> store_result();

    if ($smst -> num_rows() > 0) {
        $smst -> bind_result($id,$username, $pass, $email);
        $smst -> fetch();

        if (password_verify($_POST['pass-login'], $pass)) {
            if (session_status() == PHP_SESSION_ACTIVE) {
                session_regenerate_id();
            }
            $_SESSION['loggedin'] = True;
            $_SESSION['id'] = $id;
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $email;
            $_SESSION['auth'] = 'User';
            header('Location: ../');
            }
            else {
                header('Location: ../login.php');
                $err = 'Email or password error';
                $_SESSION['ERR_FLASH'] = $err;
            }
    }
    else {
        header('Location: ../login.php');
        $err = 'Email or password error (1)';
        $_SESSION['ERR_FLASH'] = $err;
    }
    $main -> close();
    $conn -> close();
}
?>