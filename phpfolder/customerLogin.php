<?php
session_start();
require_once("database_connect.php");

$email = $_REQUEST['CLmail'];
$password = $_REQUEST['CLpassword'];

$showQuery = "select * from customerdetails where emailid = '$email' and password = '$password'";
$runShowQuery = mysqli_query($connect,$showQuery);

$count = mysqli_num_rows($runShowQuery);

if($count){
    $_SESSION['customer_email'] = $email;
    header("location:../customerHome.php");
}else{
    header("location:../customerLogin.php?Invalid");
}
