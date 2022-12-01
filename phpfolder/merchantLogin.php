<?php
session_start();

require_once("database_connect.php");

$email = $_REQUEST['MLmail'];
$password = $_REQUEST['MLpassword'];

$showQuery = "select * from merchantdetails where restaurantemailid = '$email' and password = '$password'";
$runShowQuery = mysqli_query($connect,$showQuery);

$count = mysqli_num_rows($runShowQuery);

if($count){
    $_SESSION['marchant_email'] = $email;
    header("location:../merchantHomePage.php");
}else{
    header("location:../merchantLogin.php?Invalid");
}
