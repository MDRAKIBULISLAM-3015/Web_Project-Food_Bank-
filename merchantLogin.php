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
            <h2 class="htxt"><b> Welcome To Merchant LogIn Page!</b></h2>
            <p class="txt">Sign up or log in to continue</p>
        </div>
             <form action="phpfolder/merchantLogin.php" method="post">
                <fieldset>
                    <label for="MLmail"><b> <i class="fa-sharp fa-solid fa-envelope"></i>Email:</b> </label>
                    <input type="email" id="MLmail" name="MLmail" placeholder="Enter Your Mail"><br><br>
        
                    <label for="MLpassword"><b> <i class="fa-solid fa-lock"></i>Password:</b> </label>
                    <input type="password" id="MLpassword" name="MLpassword" placeholder="Enter Your Password"><br><br>
                    <div class="ComonsubmitForm">
                        <Button class="CLSbtn Comonbtn">Submit</Button>
                        <Button class="CLCbtn Comonbtn">Clear</Button>
                    </div>
                    <div class="resetbtn">
                        <a href="#">Forgot your password?</a>
                    </div>
                </fieldset>
                <div class="register">
                    <P>Don't have an account?</P> <a class="Registor" href="merchantReg.php"><b>Register Now</b> </a>
                </div>
             </form>
         
        </div>
    </div>
    
    <?php
    #popup show for password not match
    if(isset($_REQUEST['Invalid'])): ?>
        <p>
            <script>
                alert("Email or Password not Match")
            </script>
        </p>
    <?php endif; ?>
    
</body>
</html>