<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>food bank</title>
</head>
<body>
    <form style="width: 500px;height: auto;margin: 0px auto;border-radius: 4px;" action="phpfolder/merchantFoodPost.php" method="post" enctype="multipart/form-data">
        <fieldset style="padding: 40px;">
            <label for="name"><b>Food Name:</b> </label>
            <input type="text" id="name" name="name" placeholder="Enter Your Name"><br><br>
            
            <label for="photo"><b>Food's Photo:</b> </label> 
            <input type="file" id="photo" name="photo"><br><br>

            <label for="price"><b>Price:</b> </label>
            <input type="number" id="price" name="price" placeholder="Write food price"><br><br>

            <label for="foodD"><b>Food Details:</b> </label>
            <textarea name="food" id="foodD" cols="40" rows="7" style="resize: none;" placeholder="Write food details"></textarea> <br><br>

            <p style="text-align: center;">
            <input type="submit" value="Upload">
            </p>
        </fieldset>
    </form>
</body>
</html>