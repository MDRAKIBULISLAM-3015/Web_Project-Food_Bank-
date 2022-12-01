<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    # Amin Information
    $reg_mail = "admin@foodbank.com";
    $reg_pwd = "admin";


    # Validation
    echo $email = $_REQUEST['Amail'];
    echo $password = $_REQUEST['Apassword'];

    if($email != '' and $password != ''){
        if($email === $reg_mail and $password === $reg_pwd){
            header("location:../adminHomePage.php");
        }else {
            header("location:../index.php?not_same");
        }
    }else {
        header("location:../index.php?empty_field");
    }
}