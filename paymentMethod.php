<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="payment.css">
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
<script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>
</head>
<div class="full">
  <body>

    <h1 class="heading">Select <span>Payment Method</span></h1>
<div class="row">
  <div class="paymentclass">
    <div class="container">
      <form action="">     
        <div class="content">         
            <h3>Payment</h3>          
                <div class="city">
                    <li>
                        <a href="bkash.php">
                            <div class="city-name"> 
                                <img src="images/bkash-logo.jpg" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="nagad.php">
                            <div class="city-name"> 
                                <img src="images/nagad.jpg" alt="">
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="rocket.php">          
                            <div class="city-name"> 
                                <img src="images/rocket.jpg" alt="">
                                
                            </div>
                        </a>
                    </li>
                    <li>
                      <a href="cashon.php">
                          <div class="city-name"> 
                              <img src="images/cashon.jpeg" alt="">
                          </div>
                      </a>
                  </li>
                </div>         
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</body>

</html>