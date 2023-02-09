<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
        $mid=$_GET['id'];
        if(isset($_POST['btn']))
        {
            $conn=mysqli_connect("localhost","root","","member");
            $qry="delete from member_table where mid=$mid"; 
            $result=$conn->query($qry);
            if($result)
            {
                header("location:db14.php");
                echo "data delete successfully"; 
            }
        }
        $table="<table border =5><th>Username</th><th>Password</th><th>Date</th><th>FName</th><th>LName</th>";
        $conn=mysqli_connect("localhost","root","","member");
        $qry="select * from member_table where mid=$mid";
        $result=$conn->query($qry);
        $row=$result->fetch_assoc();
        $unam=$row['username'];
        $pwd=$row['password'];
        $date=$row['date'];
        $fnam=$row['fname'];
        $lnam=$row['lname'];
        $table.="<tr><td>$unam</td><td>$pwd</td><td>$date</td><td>$fnam</td><td>$lnam</td></tr>";
        echo $table;  
    ?>
<body>

    <form action="" method="post">
        <input type="submit" name="btn">
    </form>
    
</body>
</html>