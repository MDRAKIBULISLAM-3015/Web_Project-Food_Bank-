<?php
//customer duplicate data insert

    require_once("database_connect.php");

    $get_id = $_REQUEST['id'];
    $selectQuery = "select * from merchantduplicatedetails where id='$get_id'";
    $runQuery = mysqli_query($connect,$selectQuery);

    $data = mysqli_fetch_assoc($runQuery);


# data recieve
$name = $data['name'];
$res_name = $data['restaurantname'];
$email = $data['restaurantmailid'];
$phone = $data['phonenumber'];
$res_type = $data['restauranttype'];
$address = $data['address'];
$username = $data['username'];
$password = $data['password'];

$insertQuery = "insert into merchantdetails(name,restaurantname,restaurantemailid,phonenumber,restauranttype,address,username,password) values ('$name','$res_name','$email','$phone','$res_type','$address','$username','$password')";


$runQuery = mysqli_query($connect,$insertQuery);


$deleteQuery = "delete from merchantduplicatedetails where id = '$get_id'";
mysqli_query($connect,$deleteQuery);

if($runQuery){
    header("location:../customerRegRequest.php");
}

