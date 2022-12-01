<?php
require_once("database_connect.php");
$get_id = $_REQUEST['id'];

$deleteQuery = "delete from merchantduplicatedetails where id = '$get_id'";
$runQuery = mysqli_query($connect,$deleteQuery);

if($runQuery){
    header("location:../merchentRegRequest.php");
}