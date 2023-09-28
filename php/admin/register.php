<?php
    include '../db_conn.php';

    $username = $_POST['txtName'];
    $email = $_POST['txtemail'];
    $pass = password_hash($_POST['txtPassword'], PASSWORD_DEFAULT);

    $sql = 'INSERT INTO `admin_account`(`username`, `email`, `password`) VALUES (?,?,?)';

    if($smst = $conn->prepare($sql)){
        $smst->bind_param("sss", $username, $email, $pass);
        $smst->execute();
    }

    echo 'insert done';

    $smst->close();
    $conn->close();

?>