<?php
  require_once("phpfolder/database_connect.php");

  $selectQuery = "select * from foodpost";
  $runQuery = mysqli_query($connect,$selectQuery);

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>complete responsive food website design tutorial</title>

    
    <link rel="stylesheet" href="restaurantpage.css" />
    
  </head>
  <body>
    <!----------------- header-section-starts ----------------->

    <header>
        <div class="header-area">
            <div class="container">
                <nav id="nav">
                    <div class="nav-logo">
                        <a href="food.html">Food Bank</a>
                    </div>
            
                  <style>
                    #btn {
                      display: inline-block;
                      font-size: 14px;
                      border: 1px solid black;
                      padding: 6px;
                      border-radius: 5px;
                      position: relative;
                    }
                    #btn span {
                      position: absolute;
                      top: -13px;
                      right: -11px;
                      background-color: red;
                      padding: 3px;
                      border-radius: 4px;
                      color: white;
                    }
                  </style>
            
                  <div class="main-menu">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#home" id="btn">Total
                          <span>10</span>
                        </a></li>
                        <li><a href="#speciality">speciality</a></li>
                        <li><a href="#popular">popular</a></li>
                        <li><a href="#gallery">gallery</a></li>
                        <li><a href="#review">review</a></li>
                    </ul>
                </div>
                </nav>
            </div>
        </div>
    </header>

    <!------------ header-section-ends ---------------->

    <!------------- home-section-starts ----------------->

    <section class="home" id="home">
      <div class="content">
        <h3>food made with love</h3>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptas
          accusamus tempore temporibus rem amet laudantium animi optio
          voluptatum. Natus obcaecati unde porro nostrum ipsam itaque impedit
          incidunt rem quisquam eos!
        </p>
        <a href="#" class="btn">order now</a>
      </div>

      <div class="image">
        <img src="images/restaurantpage/home1.png" alt="" />
      </div>
    </section>

    <!-------------- home-section-ends--------------- -->

    <!-- speciality-section-start ---------------------->

    <section class="speciality" id="speciality">
      <h1 class="heading">our <span>speciality</span></h1>

      <div class="box-container">
        <div class="box">
          <img class="image" src="images/restaurantpage/burger.jpg" alt="" />
          <div class="content">
            <img src="images/restaurantpage/s-1.png" alt="" />
            <h3>tasty burger</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
              inventore neque amet ipsa tenetur voluptates aperiam tempore
              libero labore aut.
            </p>
          </div>
        </div>
        <div class="box">
          <img class="image" src="images/restaurantpage/ice-cream.jpeg" alt="" />
          <div class="content">
            <img src="images/restaurantpage/s-3.png" alt="" />
            <h3>cold ice-cream</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
              inventore neque amet ipsa tenetur voluptates aperiam tempore
              libero labore aut.
            </p>
          </div>
        </div>
        <div class="box">
          <img class="image" src="images/restaurantpage/pizza.jpg" alt="" />
          <div class="content">
            <img src="images/restaurantpage/s-2.png" alt="" />
            <h3>tasty pizza</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
              inventore neque amet ipsa tenetur voluptates aperiam tempore
              libero labore aut.
            </p>
          </div>
        </div>
        
        <div class="box">
          <img class="image" src="images/restaurantpage/s-img-4.jpg" alt="" />
          <div class="content">
            <img src="images/restaurantpage/s-4.png" alt="" />
            <h3>cold drinks</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
              inventore neque amet ipsa tenetur voluptates aperiam tempore
              libero labore aut.
            </p>
          </div>
        </div>
        <div class="box">
          <img class="image" src="images/restaurantpage/sweets.png" alt="" />
          <div class="content">
            <img src="images/restaurantpage/s-5.png" alt="" />
            <h3>tasty sweets</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
              inventore neque amet ipsa tenetur voluptates aperiam tempore
              libero labore aut.
            </p>
          </div>
        </div>
        <div class="box">
          <img class="image" src="images/restaurantpage/breakfast.jpg" alt="" />
          <div class="content">
            <img src="images/restaurantpage/s-6.png" alt="" />
            <h3>healty breakfast</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda
              inventore neque amet ipsa tenetur voluptates aperiam tempore
              libero labore aut.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!------ speciality-section-ends ------------->

    <!--------------------- popular-section-starts ---------------->
    <style>
      .box {
        position: relative;
      }
      .box-pic {
        z-index: 1200;
        position: absolute;
        right: 30px;
        top: 20px;
        width: 30px;
        height: 30px;
      }
      .box-pic > img {
        width: 100% !important;
        height: 100% !important;
      }
    </style>

    <section class="popular" id="popular">
      <h1 class="heading">most <span>popular</span> foods</h1>

      <div class="box-container">
      <?php
        while($data = mysqli_fetch_assoc($runQuery)){ ?>

        <div class="box">
          <span class="price"> <?php echo $data['price'] ?>TK </span>
          <img src="uploadphoto/<?php echo $data['photo'] ?>" alt="" />
          <h3><?php echo $data['name'] ?></h3>
          <h4><?php echo $data['details'];?></h4>
          <a href="paymentMethod.php?id=<?php echo $data['id'] ?>" class="btn">order now</a>
          <a href="reviewCustomer.php?id=<?php echo $data['id'] ?>" class="btn">Review</a>
          <span class="box-pic">
            <img src="heart/heart_empty.png" id="pic" alt="photo" onclick="changePic()">
          </span>
        </div>

      <?php } ?>


          <script>
            let image = document.querySelectorAll("#pic")
            let len = image.length
            function changePic(){
              for(let i=0;i<len;i++){
                image[i].addEventListener("click",function(){
                  image[i].src="heart/heart.png"
                })
              }
            }
          </script>
      </div>
    </section>

    <!-- popular-section ends -->

    <!----------- gallery-section starts --------------->

    <section class="gallery" id="gallery">
      <h1 class="heading">our food <span> gallery </span></h1>

      <div class="box-container">
        <div class="box">
          <img src="images/restaurantpage/burger.jpg" alt="" />
          <div class="content">
            <h3>tasty food</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Deleniti, ipsum.
            </p>
            <a href="#" class="btn">ordern now</a>
          </div>
        </div>
        <div class="box">
          <img src="images/restaurantpage/sandwich.jpg" alt="" />
          <div class="content">
            <h3>tasty food</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Deleniti, ipsum.
            </p>
            <a href="#" class="btn">ordern now</a>
          </div>
        </div>
        <div class="box">
          <img src="images/restaurantpage/porota.jpg" alt="" />
          <div class="content">
            <h3>tasty food</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Deleniti, ipsum.
            </p>
            <a href="#" class="btn">ordern now</a>
          </div>
        </div>
        <div class="box">
          <img src="images/restaurantpage/steak.jpg" alt="" />
          <div class="content">
            <h3>tasty food</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Deleniti, ipsum.
            </p>
            <a href="#" class="btn">ordern now</a>
          </div>
        </div>
        <div class="box">
          <img src="images/restaurantpage/pie.jpg" alt="" />
          <div class="content">
            <h3>tasty food</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Deleniti, ipsum.
            </p>
            <a href="#" class="btn">ordern now</a>
          </div>
        </div>
        <div class="box">
          <img src="images/restaurantpage/pasta.jpg" alt="" />
          <div class="content">
            <h3>tasty food</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Deleniti, ipsum.
            </p>
            <a href="#" class="btn">ordern now</a>
          </div>
        </div>
        <div class="box">
          <img src="images/restaurantpage/chicken.jpg" alt="" />
          <div class="content">
            <h3>tasty food</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Deleniti, ipsum.
            </p>
            <a href="#" class="btn">ordern now</a>
          </div>
        </div>
        <div class="box">
          <img src="images/restaurantpage/biriyani.png" alt="" />
          <div class="content">
            <h3>tasty food</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Deleniti, ipsum.
            </p>
            <a href="#" class="btn">ordern now</a>
          </div>
        </div>
        <div class="box">
          <img src="images/restaurantpage/potato.jpg" alt="" />
          <div class="content">
            <h3>tasty food</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Deleniti, ipsum.
            </p>
            <a href="#" class="btn">ordern now</a>
          </div>
        </div>
      </div>
    </section>

    <!---------------gallery-section-ends------------>

    <!----------review section starts -------------->

    <section class="review" id="review">
      <h1 class="heading">our customers <span>reviews</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="images/restaurantpage/wahid.jpg" alt="" />
          <h3>Abdul Wahid (Parvez)</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
            delectus, ducimus facere quod ratione vel laboriosam? Est, maxime
            rem. Itaque.
          </p>
        </div>
        <div class="box">
          <img src="images/restaurantpage/arju.jpg" alt="" />
          <h3>Elahi Arju</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
            delectus, ducimus facere quod ratione vel laboriosam? Est, maxime
            rem. Itaque.
          </p>
        </div>
        <div class="box">
          <img src="images/restaurantpage/shovon.jpg" alt="" />
          <h3>Al Amin</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
            delectus, ducimus facere quod ratione vel laboriosam? Est, maxime
            rem. Itaque.
          </p>
        </div>
      </div>
    </section>

    <!------------------review-section-ends--------- -->

    <!------------foote-section---------- -->

    <section class="footer">
      <div class="share">
        <a href="#" class="btn">facebook</a>
        <a href="#" class="btn">twitter</a>
        <a href="#" class="btn">instagram</a>
        <a href="#" class="btn">pinterest</a>
        <a href="#" class="btn">linkedin</a>
      </div>
    </section>

    <!-- scroll top button  -->
    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

    <!-- loader  -->
    <div class="loader-container">
      <img src="images/restaurantpage/loaderimg.gif" alt="" />
    </div>

    <!-- custom js file   -->
<!-- -----------font-awesome-link -------------->
<script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>

<script>
  function loader(){
      document.querySelector('.loader-container').classList.add('fade-out');
    }

  function fadeOut(){
    setInterval(loader, 2000);
  }

  window.onload = fadeOut();
</script>

  </body>
</html>
