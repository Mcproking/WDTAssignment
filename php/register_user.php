<?php

$username = $_POST['txtUsername'];

$password = $_POST['txtPassword'];

$email = $_POST['txtEmail'];

$phone = $_POST['Phone'];

$gender = $_POST['Gender'];

$address = $_POST['txtAddress'];

$state = $_POST['State'];

$dob = $_POST['txtDOB'];


echo $username;
echo '<br>';
echo $password;
echo '<br>';
echo $email;
echo '<br>';
echo $phone;
echo '<br>';
echo $gender;
echo '<br>';
echo $dob;
echo '<br>';

if(!empty($address) or !empty($state)){
    echo $address;
    echo '<br>';
    echo $state;
}