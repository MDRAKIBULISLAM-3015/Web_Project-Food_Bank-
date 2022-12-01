<?php
    session_start();
    require_once("phpfolder/database_connect.php");

    $get_id = $_REQUEST['id'];
    $selectQuery = "select * from foodpost where id = '$get_id'";
    $runQuery = mysqli_query($connect,$selectQuery);

    $data = mysqli_fetch_assoc($runQuery);

    $customer = '';
    if(isset($_SESSION['customer_email'])){
        $email = $_SESSION['customer_email'];

        $customerSelectQuery = "select * from customerdetails where emailid = '$email'";
        $customerRunQuery = mysqli_query($connect,$customerSelectQuery);
        $customer = mysqli_fetch_assoc($customerRunQuery);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        body {
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }
        .top-content {
            width: 70vw;
            height: auto;
            text-align: center;
            display: flex;
            justify-content: space-around;
        }
        .top-content img {
            width: 400px;
            height: 200px;
            border-radius: 4px;
            border: none;
            outline: none;
            box-shadow: 6px 9px 15px #d1d1d1a3;
        }
        textarea {
            border: 1px solid #ccc;
            outline: none;
            padding: 10px;
            margin-bottom: 15px;
        }
        input[type="submit"]{
            padding: 7px 12px;
            background-color: lightblue;
            border: none;
            outline: none;
            border-radius: 4px;
            vertical-align: 25px;
        }
        .review-post {
            width: 500px;
            text-align: left;
            margin: 60px 0px;
        }
        .review-post img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            border: none;
            outline: none;
            object-fit: cover;
            object-position: center;
        }
        .review-post > h2 {
            margin: 20px 0px;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="top-content">
            <div class="left-part">
                <img src="uploadphoto/<?php echo $data['photo'] ?>" alt="photo"> 
                <h2><?php echo $data['name'] ?></h2>
                <h3><?php echo $data['price'] ?></h3>
                <h5><?php echo $data['details'] ?></h5>
            </div>
            <div class="right-part">
                <form action="" method="POST" name="my-form" onsubmit="review(event)">
                    <textarea name="message" id="" cols="40" rows="7" style="resize: none;"></textarea>
                    <input type="submit" value="Review">
                </form>
            </div>
        </div>
        <div class="review-post">
            <img src="uploadphoto/<?php echo $customer['photo'] ?>" alt="photo">
            <h2><?php echo $customer['name'] ?></h2>
        </div>
    </div>


    <script>
        const review = (event)=>{
            event.preventDefault()
            let data = document.forms['my-form']['message'].value 
            let pera = document.createElement("p")
            pera.innerHTML = data

            let selector = document.querySelector(".review-post")
            selector.appendChild(pera)
        }
    </script>
    
</body>
</html>