<?php
require_once("database_connect.php");
$get_id = $_REQUEST['id'];

$deleteQuery = "delete from merchantdetails where id = '$get_id'";
$runQuery = mysqli_query($connect,$deleteQuery);

if($runQuery){
    header("location:../allDataMerchant.php");
}