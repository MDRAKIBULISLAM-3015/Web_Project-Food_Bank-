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
    <div class="customerhome">
    <header>
        <div class="header-area">
            <div class="container">
                <nav>
                    <div class="nav-logo">
                        <a href="#">Food Bank</a>
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
    <section class="home-area" id="home-area">
        <div class="dark-overlay">
            <div class="container">
                <div class="home-content">
                    <div class="home-text">
                        <h1>Are you hungry?</h1>
                        <h3>Don't wait!!!</h3>
                        <h3>Let start to order food now!</h3>
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
                Find us in these cities and many more!
            </div>
            <div class="city-image">
                <div class="city">
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/dhaka.jpg" alt="">
                                <h2>Dhaka</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/cox's bazar.jpg" alt="">
                                <h2>Cox's Bazar</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/Savar.jpg" alt="">
                                <h2>Savar</h2>
                            </div>
                        </a>
                    </li>
                </div>
                <div class="city">
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/Comilla.jpg" alt="">
                                <h2>Comilla</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/faridpur.jpg" alt="">
                                <h2>Faridpur</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/Bagerhat.jpg" alt="">
                                <h2>Bagerhat</h2>
                            </div>
                        </a>
                    </li>
                </div>
                <div class="city">
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/Jamalpur.jpg" alt="">
                                <h2>Jamalpur</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/Nator.jpg" alt="">
                                <h2>Nator</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/Satkhira.jpg" alt="">
                                <h2>Satkhira</h2>
                            </div>
                        </a>
                    </li>
                </div>
                <div class="city">
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/Mymensingh.jpg" alt="">
                                <h2>Mymensingh</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/Chuadanga.jpg" alt="">
                                <h2>Chuadanga</h2>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/Meherpur.jpg" alt="">
                                <h2>Meherpur</h2>
                            </div>
                        </a>
                    </li>
                </div>
                <div class="city">
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/Madaripur.jpg" alt="">
                                <h2>Madaripur</h2>
                            </div>
                        </a>
                    </li>   
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/Barishal.jpg" alt="">
                                <h2>Barishal</h2>
                            </div>
                        </a>
                    </li>  
                    <li>
                        <a href="allRestaurantsName.php">
                            <div class="city-name"> 
                                <img src="images/customerHome/Tangail.jpg" alt="">
                                <h2>Tangail</h2>
                            </div>
                        </a>
                    </li>   
                </div>
            </div>
        </div>

    </section>

     <!-- steps-section starts  -->

     <div class="step-container" id="step-container">
        <h1 class="heading">How it <span>Works</span></h1>
  
        <section class="steps">
          <div class="box">
            <img src="images/customerHome/step-1.jpg" alt="" />
            <h3>Choose your favorite food</h3>
          </div>
          <div class="box">
            <img src="images/customerHome/step-2.jpg" alt="" />
            <h3>Free and fast delivery</h3>
          </div>
          <div class="box">
            <img src="images/customerHome/step-3.jpg" alt="" />
            <h3>Easy payments methods</h3>
          </div>
          <div class="box">
            <img src="images/customerHome/step-4.jpg" alt="" />
            <h3>And finally, enjoy your food</h3>
          </div>
        </section>
      </div>
  
      <!-- -----------steps-section ends ---------------------->
      </div>   
</body>
</html>