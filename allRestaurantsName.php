<?php 
session_start();
require_once("phpfolder/database_connect.php");

if(isset($_SESSION['customer_email'])){
    $email = $_SESSION['customer_email'];

    $showQuery = "select * from customerdetails where emailid = '$email'";
    $runQuery = mysqli_query($connect,$showQuery);

    $data = mysqli_fetch_assoc($runQuery);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food bank</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Tajawal:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="customerhome.css">
    <script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <div class="header-area">
            <div class="container">
                <nav>
                    <div class="nav-logo">
                        <a href="restaurantpage.php">Food Bank</a>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <li><a href="#home-area">Home</a></li>
                            <li><a href="#step-container">How works</a></li>
                            <li><a href="#city-id">Find city</a></li>
                            <li>
                                <style>
                                    #right-top-menu {
                                        position: relative;
                                        display: flex;
                                        justify-content: space-around;
                                        cursor: auto;
                                    }
                                    #right-top-menu img {
                                        position: relative;
                                        top: 13px;
                                        right: 9px;
                                    }
                                    #right-bottom-menu {
                                        position: absolute;
                                        width: 150px;
                                        height: auto;
                                        background-color: white;
                                        border-radius: 3px;
                                        top: 100%;
                                        left: 40px;
                                        display: none;
                                        z-index: 400;
                                    }
                                    #right-bottom-menu a {
                                        color: black;
                                        margin-left: 10px;
                                        line-height: -29px;
                                    }
                                </style>
                                <div id="right-top-menu">
                                    <img src="uploadphoto/<?php echo $data['photo']; ?>" alt="photo" style="width: 40px;height: 40px;border-radius: 50%;object-fit: cover;object-position: center;">    
                                    <a>
                                        <?php
                                            echo $data['username'];
                                        ?>
                                    </a>
                                    <div id="right-bottom-menu">
                                        <a href="customerProfile.php">Profile</a>
                                        <a href="customerEditProfile.php">Edit</a>
                                        <a href="index.php">Logout</a>
                                    </div>
                                </div>
                                <script>
                                    let selector = document.getElementById("right-bottom-menu")
                                    let container = document.getElementById("right-top-menu")

                                    let count = 0;
                                    
                                    container.addEventListener("click",function(){
                                        if(count == 0){
                                           selector.style.display = "block";
                                           count++;
                                        }else {
                                            count = 0;
                                            selector.style.display = "none";
                                        }
                                    })
                                </script>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!---------------Home section----------------------->
    <section class="home-areaa" id="home-area">
        <div class="dark-overlayy">
            <div class="container">
                <div class="home-content">
                    <div class="home-text">
                        <h1>Best</h1>
                        <h3>restaurant</h3>
                        <h3>in Dhaka</h3>
                    </div>
                    <div class="home-btn">
                        <a href="#city-id"><button>Order Now</button></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!---------------cities----------------------->
    <section id="city-id">
        <div class="container">
            <div class="city-text">
                Choose Your Favourite Restaurant.
            </div>
            <div class="city-image">
                <div class="city">
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/GrandioseRestaurant.jpg" alt="">
                                <h2>Grandiose Restaurant</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/ThaiChiRestaurant&Cafe.jpg" alt="">
                                <h2>Thai Chi Restaurant & Cafe</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/Favola.jpg" alt="">
                                <h2>Favola</h2>
                            </div>
                        </a>
                    </li>
                </div>
                <div class="city">
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/IzumiJapaneseKitchen.jpg" alt="">
                                <h2>Izumi Japanese Kitchen</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/SajnaRestaurant.jpg" alt="">
                                <h2>Sajna Restaurant</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/Prego.jpg" alt="">
                                <h2>Prego</h2>
                            </div>
                        </a>
                    </li>
                </div>
                <div class="city">
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/LucknowDhaka.jpg" alt="">
                                <h2>Lucknow Dhaka</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/GrillOnTheSkyline.jpg" alt="">
                                <h2>Grill On The Skyline</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/Bunka.jpg" alt="">
                                <h2>Bunka</h2>
                            </div>
                        </a>
                    </li>
                </div>
                <div class="city">
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/LatestRecipe.jpg" alt="">
                                <h2>Latest Recipe</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/KababFactory.jpg" alt="">
                                <h2>Kabab Factory</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/TreeHouse.JPG" alt="">
                                <h2>Tree House</h2>
                            </div>
                        </a>
                    </li>
                </div>
                <div class="city">
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/Tarka.jpg" alt="">
                                <h2>Tarka</h2>
                            </div>
                        </a>
                    </li>   
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/BarBQTonite.jpg" alt="">
                                <h2>Bar B Q Tonite</h2>
                            </div>
                        </a>
                    </li>  
                    <li>
                        <a href="restaurantpage.php">
                            <div class="city-namee"> 
                                <img src="images/allrestaurantName/PizzaClubSavar.jpg" alt="">
                                <h2>PizzaClub Savar</h2>
                            </div>
                        </a>
                    </li>   
                </div>
            </div>
        </div>

    </section>
    
</body>
</html>