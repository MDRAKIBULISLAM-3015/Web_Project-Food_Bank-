<?php
//customer duplicate data insert

    require_once("database_connect.php");

    $get_id = $_REQUEST['id'];
    $selectQuery = "select * from customerduplicatedetails where id='$get_id'";
    $runQuery = mysqli_query($connect,$selectQuery);

    $data = mysqli_fetch_assoc($runQuery);


# data recieve
$name = $data['name'];
$birth_date = $data['birthdate'];
$email = $data['emailid'];
$phone = $data['phonenumber'];
$gender= $data['gender'];
$address = $data['address'];
$file_name = $data['photo'];
$username = $data['username'];
$password = $data['password'];

$insertQuery = "insert into customerdetails(name,birthdate,emailid,phonenumber,gender,address,photo,username,password) values ('$name','$birth_date','$email','$phone','$gender','$address','$file_name','$username','$password')";	


$runQuery = mysqli_query($connect,$insertQuery);


$deleteQuery = "delete from customerduplicatedetails where id = '$get_id'";
mysqli_query($connect,$deleteQuery);

if($runQuery){
    header("location:../customerRegRequest.php");
}

if($runQuery){
    header("location:../customerRegRequest.php");
}
