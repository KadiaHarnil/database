<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $id='';
    $uname='';
    $lname='';
    if(isset($_POST['btn']))
    {
        $id=$_POST['txtid'];
        $uname=$_POST['txtuname'];
        $lname=$_POST['txtpwd'];
        $conn=mysqli_connect("localhost","root","","member");
        $qry="update member_table set username='$uname',password='$lname' where mid='$id'";
        echo $qry;
        $result=$conn->query($qry);
        if($result)
            echo "Update successfully...";
        else    
            echo "Failed";
    }
?>
<body>
    <form action="" method="post">
        <span>Enter id you want to update</span><input type="text" name="txtid" placeholder="ID"><br>
        <span>Enter updated name</span><input type="text" name="txtuname" placeholder="Username"><br>
        <span>Enter updated password</span><input type="text" name="txtpwd" placeholder="Password"><br>
        <input type="submit" name="btn">
    </form>
</body>
</html>