<!DOCTYPE html>

<head>
    <title>food bank</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="containerr">
        <div class="divlog">
            <a href="index.php" class="logo"> <i class="fa-solid fa-utensils"></i> FoodBank</a>

            <a href="optionLogin.php" class="login"><i class="fa-solid fa-circle-user"></i> LOGIN</a>

        </div>
        <div class="center">
            <h1 class="htxt">It's the food you love, delivered!</h1>
            <form action="index.php" class="formCenter" name="myForm" onsubmit="valid(event)" method="post">
                <input type="search" name="address" class="address" placeholder="   Enter Your Address" required>
                <button class="Dbtn"><b>Delivery</b></button><br><br>
            </form>
        </div>
    </div>

    

    <div class="pageDe">
       
         
       <div class="Wsize">
       <div class="WRsize">
        <h2 class="mergin"><b>Put us in your pocket</b></h2>
        <h3 class="mergin">Download the FoodBank App</h3>
        <p class="extraMergin"> It's all at your fingertips – the restaurants you love. Find the right food to suit your mood, and make the first bite last. Go ahead, download us.</p>  
        <a href="#"><img width="200px" src="images/iPhone.png" alt="alt"></a>
        <a href="#"><img width="200px" class="img-size" src="images/google.png" alt="alt"></a>
        <a href="#"><img width="200px" src="images/appgallery.png" alt="alt"></a>   
       </div>

       </div>
      
    </div>

    <div class="backgrou-colour">
        <h2><b>Order food from the best restaurants with FoodBank Bangladesh</b></h2>
        <p class="pagewrit">Are you hungry? Did you have a long and stressful day? Interested in getting a cheesy pizza
            delivered to
            your office or looking to avoid the weekly shop? Then FoodBank Bangladesh is the right destination for
            you! FoodBank offers you a long and detailed list of the best restaurants near you to help make
            your everyday easier. Our online food delivery service has it all, whether you fancy a juicy burger
            from Takeout, fresh sushi from Samdado or peri peri chicken from Nando's, Sit back and relax-let FoodBank
            Bangladesh take the pressure off your shoulders.
        </p>
        <details class="detail">
            <summary class="more">Read More</summary>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nisi, ipsa? Eligendi asperiores unde hic fugiat tenetur. Itaque, atque consequatur nulla repudiandae dignissimos velit autem, laborum odio quam quidem nesciunt dolorum voluptates nisi error deserunt amet sequi rerum reiciendis. Non perspiciatis ea itaque asperiores ex tempore architecto consequatur soluta necessitatibus voluptates.</p>
        </details>
    </div>
    <div>
        <div class="divlog txtcolour">
            <p><i class="fa-solid fa-utensils"></i> FoodBank </p>
            <div class="social-icons ">
                <a href="https://www.facebook.com/mdrakid.biswas/" class="login"><i
                        class="fa-brands fa-facebook"></i></a>
                <a href="https://www.facebook.com/samanta.sajjad.5" class="login"><i
                        class="fa-brands fa-facebook"></i></a>
            </div>

        </div>
        <div class="divlog txtcolour txtposition">
            <p>Copyright @2022 FoodBank</p>
            <p>About Us: <a class="txthover" href="https://mdrakibulislam-3015.github.io/website/index.html">Rakibul</a>
                / <a class="txthover" href="https://samanta15-3023.github.io/portfolio/">Samanta</a> </p>
            <a class="txthover" href="https://t.me/+Uat4db6bR0hmMmZl">Help Center</a>
            <a class="txthover" href="https://www.youtube.com/channel/UCF-cZqGxSMyEn6ZSbpToM6w">Subscription</a>

        </div>
    </div>

    <script>
        const valid = (event)=>{
            event.preventDefault();
            let data = document.forms['myForm']['address'].value
            if(data != " "){
             alert("Please LogIn First!")
            
            }
        }
    </script>

</body>

</html>