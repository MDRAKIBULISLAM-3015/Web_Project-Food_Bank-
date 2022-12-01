<?php
    require_once("php/database_connect.php");

    $selectQuery = "select * from customerdetails";
    $runQuery = mysqli_query($connect,$selectQuery);

    if(mysqli_num_rows($runQuery) == 0){
        header("location:adminHomePage.php");
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>food bank</title>
    <link rel="stylesheet" href="adminStyle.css">
</head>
<body>
    <table >
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Brith Date</th>
            <th>Mail ID</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Photo</th>
            <th>User Name</th>
            <th>Password</th>
            <th>action</th>
        </tr>
        <?php
            $count = 1;
            while($data = mysqli_fetch_assoc($runQuery)){ ?>
            <tr>
                <td><?php echo $count;$count++; ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['birthdate'] ?></td>
                <td><?php echo $data['emailid'] ?></td>
                <td><?php echo $data['phonenumber'] ?></td>
                <td><?php echo $data['gender'] ?></td>
                <td><?php echo $data['address'] ?></td>
                <td><?php echo $data['photo'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td>
                    <a class="btn btn-bg2" href="php/deleteAllCustomerReg.php?id=<?php echo $data['id'] ?>">Remove</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>