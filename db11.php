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
    $c="";
    $d="";
    $e="";
    if(isset($_POST['btn']))
    {   
        $a=$_POST['txtus'];
        $b=$_POST['txtpws'];
        $c=$_POST['txtdat'];
        $d=$_POST['txtfnam'];
        $e=$_POST['txtlnam'];
        $conn=mysqli_connect("localhost","root","","member");
        $qry="insert into member_table(username,password,date,fname,lname) values ('$a','$b','$c','$d','$e')";
        $result=$conn->query($qry);
        if($result)
            echo "Data Added Successfully";
        else    
            echo "failed";
    }
?>
<body>
    <form action="" method="post">
        <input type="text" name="txtus" placeholder="Enter Username">
        <input type="password" name="txtpws" placeholder="Enter Password">
        <input type="text" name="txtdat" placeholder="Enter Date">
        <input type="text" name="txtfnam" placeholder="Enter FName">
        <input type="text" name="txtlnam" placeholder="Enter LName">
        <input type="submit" name="btn">
    </form>
</body>
</html>