<?php
require_once("database_connect.php");
$get_id = $_REQUEST['id'];

$deleteQuery = "delete from customerduplicatedetails where id = '$get_id'";
$runQuery = mysqli_query($connect,$deleteQuery);

if($runQuery){
    header("location:../customerRegRequest.php");
}