<?php
    include "../php/db_conn.php";

    $Category = $_GET['Category'];

    $searchQuery = "SELECT img_path, name, price FROM item WHERE category='$Category'";
    $results = mysqli_query($conn, $searchQuery);

    if (mysqli_num_rows($results) > 0){
        //See how to insert first
    }
    else {
        echo "No records found";
    }

?>