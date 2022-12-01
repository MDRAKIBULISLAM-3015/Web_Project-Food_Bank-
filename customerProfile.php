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
    <title>food bank</title>
    <style>
        .buttomProfile tr,th,td{
             border-bottom: 1px solid black;
             padding-bottom: 12px;
         }
         .topProfile img{
          border-radius: 50%;
          width: 200px;
          height: 200px;
         }
         body{
            width: 100%;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
         }
         .buttomProfile a{
            background-color: blueviolet;
            color: black;
            margin-top: 20px;
            padding: 15px;
            margin-left: 80px;
            justify-content: center;
            display: inline-block;
            align-items: center;
            text-decoration: none;
         }
     </style>
</head>
<body>
    <div class="mainProfile">
        <div class="topProfile">
            <img src="uploadphoto/<?php echo $data['photo'] ?>" alt="">
            <h2><?php echo $data['name']; ?></h2>
        </div>
        <div class="buttomProfile">
            <table>
                <tr>
                    <th>Brith Date : </th>
                    <td><?php echo $data['birthdate']; ?></td>
                </tr>
                <tr>
                    <th>Mail ID : </th>
                    <td><?php echo $data['emailid']; ?></td>
                </tr>
                <tr>
                    <th>Phone Number : </th>
                    <td><?php echo $data['phonenumber']; ?></td>
                </tr>
                <tr>
                    <th>Gender : </th>
                    <td><?php echo $data['gender']; ?></td>
                </tr>
                <tr>
                    <th>Address : </th>
                    <td><?php echo $data['address']; ?></td>
                </tr>
            </table>
            <a href="customerHome.php">Back</a>
        </div>
    </div>
</body>
</html>