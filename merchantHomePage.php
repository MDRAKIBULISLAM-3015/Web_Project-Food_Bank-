<?php
session_start();
require_once("phpfolder/database_connect.php");
if(isset($_SESSION['marchant_email'])){
    $email = $_SESSION['marchant_email'];
    $selectQuery = "select * from merchantdetails";
    $runQuery = mysqli_query($connect,$selectQuery);      
    
    $data = mysqli_fetch_assoc($runQuery);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>food bank</title>
    <style>
        .resNam{
            margin-left: 200px;
            margin-top: 200px;
            color: red;
        }
        .extraClass{
            margin-top: 40px;
        }
        .divlog a{
            margin-top: 40px;
            position: relative;
        }
        .bottom-popup {
            position: fixed;
            top: 0px;
            right: 0px;
            width: 150px;
            background-color: white;
            z-index: 100;
        }
    </style>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
<body>
    <div class="containerr">
        <div class="divlog">
            <a href="#" class="logo"> <i class="fa-solid fa-utensils"></i> FoodBank</a>
            <a href="" class="logo">Order</a>
            <a href="merchantFoodPost.php" class="logo">New Food Post</a>
            <a href="" class="logo">
            <?php 
                echo $data['username'];
            ?>
            </a>
            <a class="logo" href="index.php">Logout</a>
        </div>
        <h1 class="resNam">
            <?php echo $data['restaurantname']; ?>
        </h1>
    </div>
        <div class="divlog txtcolour txtposition">
            <p class="extraClass">Copyright @2022 FoodBank</p>
            <p class="extraClass">About Us: <a class="txthover" href="https://mdrakibulislam-3015.github.io/website/index.html">Rakibul</a>
                / <a class="txthover" href="https://samanta15-3023.github.io/portfolio/">Samanta</a> </p>
            <a class="txthover" href="https://t.me/+Uat4db6bR0hmMmZl" class="extraClass">Help Center</a>
            <a class="txthover" href="https://www.youtube.com/channel/UCF-cZqGxSMyEn6ZSbpToM6w" class="extraClass">Subscription</a>

        </div>
        <script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>
</body>
</html>