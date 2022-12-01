<!DOCTYPE html>
<html lang="en">
<head>
    <title>food bank</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="containerr">
        <div class="divlog">
            <a href="#" class="logo" > <i class="fa-solid fa-utensils"></i> FoodBank</a> 
        </div>
        <div class="option">
            <h2 class="htxt"><b> Welcome To Customer Registstion Page!</b></h2>
            <p class="txt">Please Complete your Registstion to continue</p>
        </div>
        <div class="Reg">
            <form novalidate action="phpfolder/customerduplicate.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <label for="Cname"><b><i class="fa-sharp fa-solid fa-user-tie"></i>Name:</b> </label>
                    <input type="text" id="Cname" name="Cname" placeholder="Enter Your Name" required><br><br>
                    
                    <label for="CBdate"><b><i class="fa-solid fa-calendar-days"></i>Brith Date:</b> </label>
                    <input type="date" id="CBdate" name="CBdate" required><br><br>
        
                    <label for="Cmail"><b><i class="fa-solid fa-envelope"></i>Mail ID:</b> </label>
                    <input type="email" id="Cmail" name="Cmail" placeholder="Enter Your Mail ID" required><br><br>
        
                    <label for="Pnumber"><b><i class="fa-solid fa-phone"></i>Phone Number:</b> </label>
                    <input type="text" id="CPnumber" name="CPnumber" value="+880 " required><br><br>
        
                    <label for="Cgender"><b><i class="fa-solid fa-person-half-dress"></i>Gender: </b></label><br>
                    <input type="radio" id="CGradioBTN" name="CGradioBTN" value="Male">
                    <label for="Male">Male</label>
                    <input type="radio" id="CGradioBTN" name="CGradioBTN"value="Female">
                    <label for="Female">Female</label>
                    <input type="radio" id="CGradioBTN" name="CGradioBTN" value="Other">
                    <label for="Other">Other</label><br><br>
        
                    <label for="Address"><b><i class="fa-sharp fa-solid fa-location-dot" ></i>Address:</b></label>
                    <textarea rows="2" cols="50" name="Caddress"id="Caddress" required></textarea> <br><br>
        
                    <label for="Cphoto"><b>Choose Your Photo:</b> </label><br>
                    <input type="file" id="Cphoto" name="Cphoto"><br><br>

                    <label for="CUsername"><b><i class="fa-solid fa-id-badge"></i>User Name:</b> </label>
                    <input type="text" id="Cusername" name="Cusername" placeholder="Enter Your User Name" required><br><br>
        
                    <label for="Cpassword"><b><i class="fa-solid fa-lock"></i>Password:</b> </label>
                    <input type="password" id="Cpassword" name="Cpassword" placeholder="Enter Your Password" required><br><br>
    
                    <label for="Cpassword"><b><i class="fa-solid fa-key"></i>Confirm Password:</b> </label>
                    <input type="password" id="Ccon-password" name="Ccom-password" placeholder="Enter Confirm Password" required><br><br>
                    <div class="CsubmitForm ComonsubmitForm">
                        <Button class="CRSbtn Comonbtn">Submit</Button>
                        <Button class="CRCbtn Comonbtn">Clear</Button>
                        
                    </div>
               
                </fieldset>
            </form>
        </div>
    </div>
    

    <?php
    #popup show for password not match
    if(isset($_REQUEST['Invalid'])): ?>
        <p>
            <script>
                alert("Password not Match")
            </script>
        </p>
    <?php endif; ?>
    
</body>
</html>