<?php
$db_host = 'localhost';
$db_uname = 'root';
$db_pass = '';
$db_name = 'test_assignment';

// connection 
$conn = mysqli_connect($db_host, $db_uname, $db_pass, $db_name);

// check 
if (!$conn){
    die(mysqli_connect_error());
}
// echo 'yes';

?>