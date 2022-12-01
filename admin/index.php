<!DOCTYPE html>
<html lang="en">
<head>
    <title>food bank</title>
    <link rel="stylesheet" href="../style.css">
    <script src="https://kit.fontawesome.com/78e573fdf1.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="containerr">
        <div class="divlog">
            <a href="#" class="logo" > <i class="fa-solid fa-utensils"></i> FoodBank</a> 
        </div>
        <div class="option">
            <h2 class="htxt"><b> Welcome To Admin LogIn Page!</b></h2>
            <p class="txt">Sign up or log in to continue</p>
        </div>
        <form action="php/adminLogin.php" method="POST">
            <fieldset>
                <label for="Amail"><b><i class="fa-sharp fa-solid fa-envelope"></i>Email:</b> </label>
                <input type="email" id="Amail" name="Amail" placeholder="Enter Your Mail"><br><br>
    
                <label for="Apassword"><b><i class="fa-solid fa-lock"></i>Password:</b> </label>
                <input type="password" id="Apassword" name="Apassword" placeholder="Enter Password"><br><br>
                <div class="ComonsubmitForm">
                    <Button class="ASbtn Comonbtn">Submit</Button>
                    <Button class="ACbtn Comonbtn">Clear</Button>
                </div>
                <p class="for-fild" id="dialog" > 
                <?php
                                if(isset($_REQUEST['empty_field'])){
                                    echo "Please Filup All Input Field!";
                                }elseif(isset($_REQUEST['not_same'])){
                                    echo "Invalid Email or Password!";
                                }
                            ?>   
                </p>
                          
            </fieldset>
         </form>
    </div>
    <script>
        let dialog = document.getElementById("dialog")
        setTimeout(() => {
            dialog.style.display="none"
        }, 5000);
    </script>
</body>
</html>