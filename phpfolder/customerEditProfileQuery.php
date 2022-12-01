<?php
//customer duplicate data insert

    require_once("database_connect.php");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        # data recieve
        $get_id = $_REQUEST['id'];
        $name = $_REQUEST['Cname'];
        $birth_date = $_REQUEST['CBdate'];
        $email = $_REQUEST['Cmail'];
        $phone = $_REQUEST['CPnumber'];
        $gender = $_REQUEST['gender'];
        $address = $_REQUEST['Caddress'];
        $file = $_FILES['Cphoto'];
        $username = $_REQUEST['Cusername'];
        $password = $_REQUEST['Cpassword'];
        $up_photo = $_REQUEST['photo'];


        $filename = $file['name'];
        $file_name = uniqid()."_".$filename;
        $file_tmpName = $file['tmp_name'];

        if(empty($filename)){
            $updateQuery = "update customerdetails set name='$name',birthdate='$birth_date',emailid='$email',phonenumber='$phone',gender='$gender',address='$address',photo='$up_photo',username='$username',password='$password' where id = '$get_id'";	

            $runQuery = mysqli_query($connect,$updateQuery);
            if($runQuery){
                header("location:../customerHome.php");
            }
        }

        move_uploaded_file($file_tmpName,"../uploadphoto/{$file_name}");

        $updateQuery = "update customerdetails set name='$name',birthdate='$birth_date',emailid='$email',phonenumber='$phone',gender='$gender',address='$address',photo='$file_name',username='$username',password='$password' where id = '$get_id'";	


        $runQuery = mysqli_query($connect,$updateQuery);
        if($runQuery){
           header("location:../customerHome.php");
        }
    }