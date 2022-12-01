<?php
//customer duplicate data insert

    require_once("database_connect.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        # data recieve
        $name = $_REQUEST['Cname'];
        $birth_date = $_REQUEST['CBdate'];
        $email = $_REQUEST['Cmail'];
        $phone = $_REQUEST['CPnumber'];
        $gender= $_REQUEST['CGradioBTN'];
        $address = $_REQUEST['Caddress'];
        $file = $_FILES['Cphoto'];
        $username = $_REQUEST['Cusername'];
        $password = $_REQUEST['Cpassword'];
        $con_password = $_REQUEST['Ccom-password'];

        if($password==$con_password){
            
        $file_name = uniqid()."_".$file['name'];
        $file_tmpName = $file['tmp_name'];

        move_uploaded_file($file_tmpName,"../uploadphoto/{$file_name}");

        $insertQuery = "insert into customerduplicatedetails(name,birthdate,emailid,phonenumber,gender,address,photo,username,password) values ('$name','$birth_date','$email','$phone','$gender','$address','$file_name','$username','$password')";	


        $runQuery = mysqli_query($connect,$insertQuery);

           if($runQuery){
            header("location:../customerLogin.php");
            }

        }
        else{
            header("location:../customerReg.php?Invalid");
        }

    }