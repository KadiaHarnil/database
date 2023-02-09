<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $a="";
    $b="";
    $prt="";
    if(isset($_POST['txtnam']))
    {
        $a=$_POST['txtnam'];
        $b=$_POST['txtpsd'];
        $conn=mysqli_connect("localhost","root","","member");
        $qry="select * from member_table where username='$a' and password='$b'";
        $result=$conn->query($qry);
        $table="<table border =5><th>MID</th><th>Username</th><th>Password</th><th>Date</th><th>FName</th><th>LName</th>";
        $cnt=mysqli_num_rows($result);
        if($cnt>0)
        {

                while($row=$result->fetch_assoc())
                {
                    $id=$row['mid'];
                    $us=$row['username'];
                    $psd=$row['password'];
                    $dat=$row['date'];
                    $fnam=$row['fname'];
                    $lnam=$row['lname'];
                    $table.="<tr><td>$id</td><td>$us</td><td>$psd</td><td>$dat</td><td>$fnam</td><td>$lnam</td></tr>";
                }
                echo $table;
        }
        else
            $prt="No record found";
    }
?>
<body>
    <form action="" method="post">
        <input type="text" name="txtnam" placeholder="Enter name" value="<?php echo $a?>">
        <input type="password" name="txtpsd" placeholder="Enter password" value="<?php echo $b?>">
        <input type="submit" name="btn">
        <?php echo $prt ?>
    </form>
</body>
</html>