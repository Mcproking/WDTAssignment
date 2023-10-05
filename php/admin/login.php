<?php
    session_start();

    // check if the session is login alrdy
    if(!empty($_SESSION['loggedin'])){
        header('Location: ../../admin/admin.php');
    }


    // include the connection of database and sql querry
    include '../db_conn.php';
    $sql = 'SELECT `username`, `email`, `password` FROM `admin` WHERE `username` = ?';

    // user authentication
    if( $smst = $conn->prepare($sql)){
        // reqest data from sql querry and store it
        $smst -> bind_param('s',$_POST['txtName']);
        $smst -> execute();
        $smst -> store_result();

        if ($smst -> num_rows() > 0){
            $smst -> bind_result($username, $email, $pass);
            $smst -> fetch();
            if(password_verify($_POST['txtPassword'],$pass)){
                if(session_status() == PHP_SESSION_ACTIVE){
                    session_regenerate_id();
                }
                $_SESSION['loggedin'] = True;
                $_SESSION['name'] = $username;
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $pass;
                header('Location: ../../admin/admin.php');
            }else{
                echo 'Worng Pass';
            }
        }else{
            echo 'Worng User';
        }
        $smst -> close();
        $conn -> close();
    }
?>