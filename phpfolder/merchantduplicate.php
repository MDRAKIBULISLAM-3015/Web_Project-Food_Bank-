<?php
//merchant duplicate data insert

    require_once("database_connect.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        # data recieve
        $name = $_REQUEST['Mname'];
        $res_name = $_REQUEST['Cname'];
        $email = $_REQUEST['Rmail'];
        $number = $_REQUEST['RPnumber'];
        $radio = $_REQUEST['btn'];
        $address = $_REQUEST['Caddress'];
        $username= $_REQUEST['Rusername'];
        $password = $_REQUEST['Rpassword'];
        $con_password = $_REQUEST['Rcom-password'];

        
        if($password==$con_password){
            $insertQuery = "insert into merchantduplicatedetails(name,restaurantname,restaurantmailid,phonenumber,restauranttype,address,username,password) values ('$name','$res_name','$email','$number','$radio','$address','$username','$password')";	
    
    
            $runQuery = mysqli_query($connect,$insertQuery);
    
            if($runQuery){
                header("location:../merchantLogin.php");
            }

        
        }
        else{
            header("location:../merchantReg.php?Invalid");
        }

       
    }