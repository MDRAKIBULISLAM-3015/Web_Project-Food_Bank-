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
            <h2 class="htxt"><b> Welcome To Merchant Registstion Page!</b></h2>
            <p class="txt">Please Complete your Registstion to continue</p>
        </div>
        <div class="Reg">
            <form   action="phpfolder/merchantduplicate.php" method="post">

                <fieldset >
                    <label for="Mname"><b><i class="fa-sharp fa-solid fa-user-tie"></i></i>Merchant Name:</b> </label>
                    <input type="text" id="Mname" name="Mname" placeholder="Enter Merchant Name"><br><br>
    
                    <label for="Rname"><b><i class="fa-solid fa-utensils"></i>Restaurant Name:</b> </label>
                    <input type="text" id="Rname" name="Cname" placeholder="Enter Restaurant Name"><br><br>
        
                    <label for="Rmail"><b><i class="fa-solid fa-envelope"></i>Restaurant's Mail ID:</b> </label>
                    <input type="email" id="Rmail" name="Rmail" placeholder="Enter Restaurant's Mail ID"><br><br>
        
                    <label for="RPnumber"><b><i class="fa-solid fa-phone"></i>Phone Number:</b> </label>
                    <input type="text" id="RPnumber" name="RPnumber" value="+880 "><br><br>
        
                    <label for="RegiststionType"><b><i class="fa-solid fa-quote-left"></i>Restaurant Type: </b></label><br>
                    <input type="radio" id="RtypeBTN" name="btn" value="Coffe_Shop">
                    <label for="Coffee">Coffee Shop </label>
                    <input type="radio" id="RtypeBTN" name="btn" value="Restaurant">
                    <label for="Restaurant">Restaurant </label>
                    <input type="radio" id="RtypeBTN" name="btn" value="Hotel">
                    <label for="Hotel">Hotel </label>
                    <input type="radio" id="RtypeBTN" name="btn" value="Other">
                    <label for="Other">Other</label><br><br>
        
                    <label for="Address"><b><i class="fa-sharp fa-solid fa-location-dot"></i>Address:</b></label>
                    <textarea rows="2" cols="50" name="Caddress"id="Caddress"></textarea> <br><br>
        
                    <label for="RUsername"><b><i class="fa-solid fa-id-badge"></i>User Name:</b> </label>
                    <input type="text" id="Rusername" name="Rusername" placeholder="Enter User Name"><br><br>
        
                    <label for="Rpassword"><b><i class="fa-solid fa-lock"></i>Password:</b> </label>
                    <input type="password" id="Rpassword" name="Rpassword" placeholder="Enter Password"><br><br>
    
                    <label for="Rpassword"><b><i class="fa-solid fa-key"></i>Confirm Password:</b> </label>
                    <input type="password" id="Rcon-password" name="Rcom-password" placeholder="Enter Confirm Password"><br><br>
                    <div class="RsubmitForm ComonsubmitForm">
                        <Button class="RRSbtn Comonbtn">Submit</Button>
                        <Button class="RRCbtn Comonbtn">Clear</Button>
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