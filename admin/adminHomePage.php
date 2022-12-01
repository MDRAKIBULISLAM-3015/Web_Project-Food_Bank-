<?php
    require_once("php/database_connect.php");

    $customerSelectQuery = "select * from customerduplicatedetails";
    $customerRunQuery = mysqli_query($connect,$customerSelectQuery);
    $customerCounter = mysqli_num_rows($customerRunQuery);


    $allcustomerSelectQuery = "select * from customerdetails";
    $allcustomerRunQuery = mysqli_query($connect,$allcustomerSelectQuery);
    $allcustomerCounter = mysqli_num_rows($allcustomerRunQuery);


    $marchantSelectQuery = "select * from merchantduplicatedetails";
    $marchantRunQuery = mysqli_query($connect,$marchantSelectQuery);
    $marchantCounter = mysqli_num_rows($marchantRunQuery);


    $allmarchantSelectQuery = "select * from merchantdetails";
    $allmarchantRunQuery = mysqli_query($connect,$allmarchantSelectQuery);
    $allmarchantCounter = mysqli_num_rows($allmarchantRunQuery);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>food bank</title>
    <link rel="stylesheet" href="adminStyle.css">
</head>
<body>  
    <div class="mainClass">
        <div>
            <a href="customerRegrequest.php"><button  class="Btn">Request From Customer
                <?php 
                    if($customerCounter){ ?>
                        <span class="clild"><?php echo $customerCounter; ?></span>
                <?php } ?>
            </button></a>
            <a href="merchentRegRequest.php"> <button  class="Btn">Request From Marchant
                <?php 
                    if($marchantCounter){ ?>
                        <span class="clild"><?php echo $marchantCounter; ?></span>
                <?php } ?>
            </button></a>
         </div>   
         <div class="classPadding">
             <a href="allDataCustomer.php"><button  class="Btn">All data Coustomer
                <?php 
                    if($allcustomerCounter){ ?>
                        <span class="clild"><?php echo $allcustomerCounter; ?></span>
                <?php } ?>
             </button></a>
             <a href="allDataMerchant.php"><button  class="Btn">All data Marchant
                <?php 
                    if($allmarchantCounter){ ?>
                        <span class="clild"><?php echo $allmarchantCounter; ?></span>
                <?php } ?>
             </button></a>
         </div>
    </div>
</body>
</html>