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
    <title>food bank</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="divlog">
            <a href="#" class="logo" > <i class="fa-solid fa-utensils"></i> FoodBank</a> 
        </div>
        <div class="Reg">
            <form  action="phpfolder/customerEditProfileQuery.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    <label for="Cname"><b><i class="fa-sharp fa-solid fa-user-tie"></i>Name:</b> </label>
                    <input value="<?php echo $data['name']; ?>" type="text" id="Cname" name="Cname" placeholder="Enter Your Name"><br><br>
                    
                    <label for="CBdate"><b><i class="fa-solid fa-calendar-days"></i>Brith Date:</b> </label>
                    <input value="<?php echo $data['birthdate']; ?>" type="date" id="CBdate" name="CBdate"><br><br>
        
                    <label for="Cmail"><b><i class="fa-solid fa-envelope"></i>Mail ID:</b> </label>
                    <input value="<?php echo $data['emailid']; ?>" type="email" id="Cmail" name="Cmail" placeholder="Enter Your Mail ID"><br><br>
        
                    <label for="Pnumber"><b><i class="fa-solid fa-phone"></i>Phone Number:</b> </label>
                    <input value="<?php echo $data['phonenumber']; ?>" type="text" id="CPnumber" name="CPnumber" value="+880 "><br><br>
                    <input type="hidden" name="gender" value="<?php echo $data['gender']; ?>">
        
                    <label for="Address"><b><i class="fa-sharp fa-solid fa-location-dot"></i>Address:</b></label>
                    <textarea rows="2" cols="50" name="Caddress"id="Caddress">
                        <?php echo $data['name']; ?>
                    </textarea> <br><br>
        
                    <label for="Cphoto"><b>Choose Your Photo:</b> </label><br>
                    <input type="file" id="Cphoto" name="Cphoto">
                    <input type="hidden" name="photo" value="<?php echo $data['photo'] ?>">
                    <img src="uploadphoto/<?php echo $data['photo']; ?>" alt="photo" style="width: 80px;height: 80px;border-radius: 4;object-fit: cover;object-position: center;">
                    <br><br>

                    <label for="CUsername"><b><i class="fa-solid fa-id-badge"></i>User Name:</b> </label>
                    <input value="<?php echo $data['username']; ?>" type="text" id="Cusername" name="Cusername" placeholder="Enter Your User Name"><br><br>
        
                    <label for="Cpassword"><b><i class="fa-solid fa-lock"></i>Password:</b> </label>
                    <input value="<?php echo $data['password']; ?>" type="text" id="Cpassword" name="Cpassword" placeholder="Enter Your Password"><br><br>
    
                    <div class="CsubmitForm ComonsubmitForm">
                        <Button class="CRSbtn Comonbtn">Update</Button>
                        <Button class="CRCbtn Comonbtn">Clear</Button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
    
    
</body>
</html>