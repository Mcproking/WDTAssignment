<?php
    session_start();
    
    if(!empty($_SESSION['name'])){
        header('Location: ../admin.php');
    }

    include '../../php/db_conn.php';

    // $username = $_POST['txtName'];
    // $email = $_POST['txtemail'];
    // $pass = md5($_POST['txtPassword']);

    $sql = 'SELECT `username`,`email`,`password` FROM `admin_account` WHERE `username` = ?';

    if ($smst = $conn->prepare($sql)){
        $smst->bind_param('s',$_POST['txtName']);
        $smst->execute();
        $smst->store_result();

        if ($smst-> num_rows > 0){
            $smst->bind_result($username, $email, $pass);
            $smst->fetch();
            if(password_verify($_POST['txtPassword'],$pass)){
                if (session_status() == PHP_SESSION_ACTIVE){
                    session_regenerate_id();
                }
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['name'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $pass;
                header('Location: ../admin.php');
            }else{
                echo 'worng pass';
            }
        }else{
            echo 'worng user';
        }

        echo $username;
        echo $email;
        echo $pass;

        $smst->close();
        $conn->close();
    
    }
?>