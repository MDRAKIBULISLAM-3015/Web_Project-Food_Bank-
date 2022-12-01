<?php

    require_once("database_connect.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        # data recieve
        $name = $_REQUEST['name'];
        $file = $_FILES['photo'];
        $price = $_REQUEST['price'];
        $food = $_REQUEST['food'];
        
        $file_name = uniqid()."_".$file['name'];
        $file_tmpName = $file['tmp_name'];

        move_uploaded_file($file_tmpName,"../uploadphoto/{$file_name}");

        $insertQuery = "insert into foodpost(name,photo,price,details) values ('$name','$file_name','$price','$food')";	


        $runQuery = mysqli_query($connect,$insertQuery);

        if($runQuery){
            header("location:../merchantHomePage.php");
        }
    }