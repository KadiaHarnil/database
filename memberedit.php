<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $uname='';
    $pwd='';
    $dat="";
    $fname='';
    $lname='';
    $mid=$_GET["id"];
    if(isset($_POST['btn']))
    {
       
        $uname=$_POST['txtunam'];
        $pwd=$_POST['txtpwd'];
        $dat=$_POST['txtdat'];
        $fname=$_POST['txtfnam'];
        $lname=$_POST['txtlnam'];

        $conn=mysqli_connect("localhost","root","","member");
        $qry="update member_table set username='$uname',password='$pwd',date='$dat',fname='$fname',lname='$lname' where mid='$mid'";
        echo $qry;
        $result=$conn->query($qry);
        if($result)
        { 
            echo "Update successfully...";
            header("location:db14.php");
        }  

        else    
            echo "Failed";
    }
    $conn=mysqli_connect("localhost","root","","member");
    $qry="select * from member_table where mid=$mid";
    $result=$conn->query($qry);
    $row=$result->fetch_assoc();
    $unam=$row['username'];
    $pwd=$row['password'];
    $date=$row['date'];
    $fnam=$row['fname'];
    $lnam=$row['lname'];
?>
<body>
    <form action="" method="post">
        <span>Enter updated name</span><input type="text" name="txtunam" value="<?php echo $unam?>"><br>
        <span>Enter updated password</span><input type="text" name="txtpwd" value="<?php echo $pwd?>"><br>
        <span>Enter updated Date</span><input type="text" name="txtdat" value="<?php echo $date?>"><br>
        <span>Enter updated FirstName</span><input type="text" name="txtfnam" value="<?php echo $fnam?>"><br>
        <span>Enter updated LastName</span><input type="text" name="txtlnam" value="<?php echo $lnam?>"><br>
        <input type="submit" name="btn">
    </form>
</body>
</html>