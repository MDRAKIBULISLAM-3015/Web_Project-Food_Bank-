<?php
    require_once("php/database_connect.php");

    $selectQuery = "select * from merchantduplicatedetails";
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
            <th>Merchant Name</th>
            <th>Restaurant Name</th>
            <th>Restaurant's Mail ID</th>
            <th>Phone Number</th>
            <th>Restaurant Type</th>
            <th>Address</th>
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
                <td><?php echo $data['restaurantname'] ?></td>
                <td><?php echo $data['restaurantmailid'] ?></td>
                <td><?php echo $data['phonenumber'] ?></td>
                <td><?php echo $data['restauranttype'] ?></td>
                <td><?php echo $data['address'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td>
                    <a class="btn btn-bg1" href="php/acceptMarchant.php?id=<?php echo $data['id'] ?>">Accapt</a>
                    <a class="btn btn-bg2" href="php/deleteMarchantReg.php?id=<?php echo $data['id'] ?>">Reject</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>