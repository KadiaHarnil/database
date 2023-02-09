<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $a='';
    $b='';
    $c='';
    if(isset($_POST['txt']))
    {
        $a=$_POST['txt'];
        $b=$_POST['txtno1'];
        $c=$_POST['txtno2'];
        $conn=mysqli_connect("localhost","root","","member");
        $qry="update member_table set username='$b',password='$c' where mid='$a'";
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
        <span>Enter id you want to update</span><input type="text" name="txt" placeholder="ID"><br>
        <span>Enter updated name</span><input type="text" name="txtno1" placeholder="Username"><br>
        <span>Enter updated password</span><input type="text" name="txtno2" placeholder="Password"><br>
        <input type="submit" name="btn">
    </form>
</body>
</html>