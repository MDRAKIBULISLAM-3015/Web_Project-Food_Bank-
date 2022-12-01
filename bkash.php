<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="payment.css">
    <script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>
    <title>Bkash</title>
    <style>
    .full {
  padding: 8px;
  background-image: url(images/backpayment.jpg);
  background-repeat: no-repeat;
  background-size: cover;
 
}

* {
  box-sizing: border-box;
}

.heading {
  color: rgb(4, 4, 4);
}
.heading span{
    color: #ff3838;
  }
.row { 
  margin-top: 2.5rem;
  display: flex;
  flex-wrap: wrap;
  height: 26rem;
}

.totalprice { 
 float: right;
 width: 20%;
 padding: 90px 16px;
}


.paymentclass {
  float: left;
  width: 67%;
  padding: 120px 16px;
}


.container {
  background-color: #716868;
  padding: 5px 20px 15px 20px;
  border: 1px solid rgb(85, 82, 82);
  border-radius: 5px;
}

body h1{
  padding-top: 10rem;
  text-align: center;
  
}

a {
  color: #2196F3;
}

span.price {
  float: right;
  color: rgb(245, 243, 243);
}
.city{
  display: flex;
  text-align: center;
}

.city-name{
  height: 150px;
  width: 220px;
  padding: 20px;
  position: relative;
 border: 1px solid white;
  overflow: hidden;
}
.city-name img{
  height: 100%;
  width: 100%;
  transition: transform .3s ease-in-out;
  object-fit: cover; 
}
.city-name img:hover{
  transform: scale(1.2);
}
li {
  list-style: none;
}


/* bkash,rocket,cash on,nagad*/
.select{
  display: flex;
  text-align: center;
  margin-top: 5rem;
}

.bkash{
  margin-left: 1rem;
  height: 250px;
  width: 320px;
  padding: 20px;
  position: relative;
 border: 1px solid rgb(5, 5, 5);
  overflow: hidden;
}
.bkash img{
  height: 100%;
  width: 100%;
  

  
}
.discription h1{
  margin-left: 2rem;

}

.totalpricee { 
  float: right;
  width: 25%;
 margin-left: 15rem;
 }
 
 span.price {
  float: right;
  color: rgb(4, 4, 4);
}

.btn{
  display: inline-block;
  padding:.5rem 2rem;
  border: 2px solid #f80303;
  color: #f70303;
  cursor: pointer;
  font-size: 1.8rem;
  border-radius: .4rem;
  margin-top: 2rem;
  text-decoration: none;
  
}


.btn:hover{
  color:#fff;
  background-color: #f80303;
}
.button{
  text-align: center;
}
</style>
</head>
<body>
    <div class="containerr">
        <div class="select">
            <div class="bkash">
                <img src="images/bkash-logo.jpg" alt="">

            </div>
            <div class="discription">
                <h1>You Select Bkash</h1>

            </div>
            <div class="totalpricee">
                <div class="containerr">
                  <h4>Cart <span class="price" style="color:rgb(2, 2, 2)"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
                  <p><a href="#">Product 1</a> <span class="price">15TK</span></p>
                  <p><a href="#">Product 2</a> <span class="price">5TK</span></p>
                  <p><a href="#">Product 3</a> <span class="price">8TK</span></p>
                  <p><a href="#">Product 4</a> <span class="price">2TK</span></p>
                  <hr>
                  <p>Total <span class="price" style="color:rgb(6, 6, 6)"><b>30TK</b></span></p>
                </div>
              </div>
        </div>
        
        <div class="button">
            <a href="" class="btn" onclick="paymentBtn(event)">Pay Now</a> 
        </div>

    </div>

    <script>
      const paymentBtn = ()=>{
        event.preventDefault()
        alert("Payment Successfully");
        let btn = document.querySelector(".btn").innerHTML = "Cancel"

        setTimeout(() => {
          let selector = document.querySelector(".btn")
          selector.style.display="none"
          window.location.href = "http://localhost/FoodBank/restaurantpage.php"
        }, 4000);
      }
    </script>
    
</body>
</html>